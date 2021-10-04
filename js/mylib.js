
/*

 Generated by My Library Builder v1.0 (http://www.cinsoft.net/mylib-builder.asp)

 Permission is hereby granted, free of charge, to any person
 obtaining a copy of this software and associated documentation
 files (the "Software"), to deal in the Software without
 restriction, including without limitation the rights to use,
 copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the
 Software is furnished to do so, subject to the following
 conditions:

 The above copyright notice and this permission notice shall be
 included in all copies or substantial portions of the Software.

 Modified copies of the Software must be renamed.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 OTHER DEALINGS IN THE SOFTWARE.

*/
// Mon, 9 May 2011 14:20:53 UTC
// My Library (http://www.cinsoft.net/mylib.html)
// Copyright (c) 2007-2010 by David Mark. All Rights Reserved.
var API, global = this;
API = API || {};

(function() {
  var doc, html;

  // Feature testing support

  var reFeaturedMethod = new RegExp('^(function|object)$', 'i');

  // Test for properties of host objects that are never callable (e.g. document nodes, elements)

  var isRealObjectProperty = function(o, p) {
    return !!(typeof o[p] == 'object' && o[p]);
  };

  API.isRealObjectProperty = isRealObjectProperty;

  var isHostMethod = function(o, m) {
    var t = typeof o[m];
    return !!((reFeaturedMethod.test(t) && o[m]) || t == 'unknown');
  };

  API.isHostMethod = isHostMethod;

  var isHostObjectProperty = function(o, p) {
    var t = typeof o[p];
    return !!(reFeaturedMethod.test(t) && o[p]);
  };

  API.isHostObjectProperty = isHostObjectProperty;

  // Test multiple API properties

  var areFeatures = function() {
    var i = arguments.length;
    while (i--) {
      if (!API[arguments[i]]) {
        return false;
      }
    }
    return true;
  };

  API.areFeatures = areFeatures;

  // for-in filter

  var isOwnProperty = function(o, p) {
    var prop = o.constructor.prototype[p];
    return typeof prop == 'undefined' || prop !== o[p];
  };

  API.isOwnProperty = isOwnProperty;

  var canCall = !!Function.prototype.call;

  var bind, bindDeferred;

  if (canCall) {
    bind = function(fn, context) {
      var prependArgs = Array.prototype.slice.call(arguments, 2);

      if (prependArgs.length) {
        return function() {
          fn.apply(context, Array.prototype.concat.apply(prependArgs, arguments));
        };
      }
      return function() {
        fn.apply(context, arguments);
      };
    };

    bindDeferred = function(fn, context, delay) {
      var timeout;

      fn = bind.apply(this, [fn, context].concat(Array.prototype.slice(arguments, 3)));
      return function() {
        if (timeout) {
          global.clearTimeout(timeout);
          timeout = 0;
        }
        var args = Array.prototype.slice(arguments, 0);
        timeout = global.setTimeout(function() {
          fn.apply(this, args)
        }, delay);
      };
    };

    API.bind = bind;
    API.bindDeferred = bindDeferred;
  }

  if (isRealObjectProperty(this, 'document')) {
    doc = this.document;
  }

  var elementUniqueId = (function() {
    var it = 0;
    return function(el) { return el.uniqueID || (el.uniqueID = '_api' + it++); };
  })();

  API.elementUniqueId = elementUniqueId;

  var attachDocumentReadyListener, bReady, documentReady, documentReadyListener, readyListeners = [];
  var canAddDocumentReadyListener, canAddWindowLoadListener, canAttachWindowLoadListener;

  if (doc) {
    canAddDocumentReadyListener = isHostMethod(doc, 'addEventListener');
    canAddWindowLoadListener = isHostMethod(this, 'addEventListener');
    canAttachWindowLoadListener = isHostMethod(this, 'attachEvent');

    //if (canAddDocumentReadyListener || canAddWindowLoadListener || canAttachWindowLoadListener) {
      bReady = false;
      documentReady = function() { return bReady; };
      documentReadyListener = function(e) {
        if (!bReady) {
          bReady = true;
          var i = readyListeners.length;
          var m = i - 1;
          // NOTE: e may be undefined (not always called by event handler)
          while (i--) { readyListeners[m - i](e); }
        }
      };

      attachDocumentReadyListener = function(fn, docNode) {
        var addListeners = function(win) {
          if (canAddDocumentReadyListener) {
            docNode.addEventListener('DOMContentLoaded', documentReadyListener, false);
          }
          if (canAddWindowLoadListener) {
            global.addEventListener('load', documentReadyListener, false);
          } else if (canAttachWindowLoadListener) {
            global.attachEvent('onload', documentReadyListener);
          } else {
            var oldOnLoad = global.onload;
            global.onload = function(e) { if (oldOnLoad) { oldOnLoad(e); } documentReadyListener(); };
          }
        };
        docNode = docNode || global.document;
        if (docNode == global.document) {
          if (!readyListeners.length) {
            addListeners(global);
          }
          readyListeners[readyListeners.length] = fn;
          return true;
        }
        if (getDocumentWindow) {
          var win = getDocumentWindow(docNode);
          if (win) {
            addListeners(win);
            return true;
          }
        }
        return false;
      };

      API.documentReady = documentReady;
      API.documentReadyListener = documentReadyListener;
      API.attachDocumentReadyListener = attachDocumentReadyListener;
    //}
  }

  var getBodyElement, getContainerElement;

  if (attachDocumentReadyListener) {
    attachDocumentReadyListener(function() {
      var body, containerElement;

      getBodyElement = function(docNode) {
        docNode = docNode || global.document;
        if (isRealObjectProperty(docNode, 'body')) { return docNode.body; }
        if (typeof getEBTN == 'function') { return getEBTN('body', docNode)[0] || null; }
        return null;
      };

      API.getBodyElement = getBodyElement;

      body = getBodyElement();

      // Returns documentElement or body as best deemed appropriate
      // Result is ambiguous in all but modern browsers, so don't assume too much from it.
      getContainerElement = function(docNode) {
        docNode = docNode || global.document;
        return (docNode.documentElement && (!docNode.compatMode || docNode.compatMode.indexOf('CSS') != -1))?docNode.documentElement:getBodyElement(docNode);
      };

      API.getContainerElement = getContainerElement;

      containerElement = getContainerElement();

      body = containerElement = null;
    });

  }

  doc = null;
  html = null;
})();