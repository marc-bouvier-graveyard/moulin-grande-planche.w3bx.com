<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <style type="text/css">
            html { height: 100% }
            body { height: 100%; margin: 0px; padding: 0px }
            #content{
                font-family: Verdana, Geneva, sans-serif;
                font-size:10px;
            }
        </style>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
    </head>
    <body onload="initialize();return false">
        <div id="map_canvas" style="width: 640px; height: 480px;"></div>
        <script type="text/javascript">
            function initialize() {
                var myLatlng = new google.maps.LatLng(48.11856660,3.22046160);
                var myOptions = {
                    zoom: 10,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                var contentString = '<div id="content">'+
                    '<div id="siteNotice">'+
                    '</div>'+
                    '<h3 id="firstHeading" class="firstHeading">Moulin de la Grande Planche</h3>'+
                    '<div id="bodyContent">'+
                    '<p>Francine Boura   <br/>81, rue des Fontaines <br/>89500 ? Marsangy</p>'+
                    '</div>'+
                    '<span><a href="http://maps.google.com/maps?f=q&source=s_q&hl=fr&geocode=&q=Francine+Boura+++81,+rue+des+Fontaines+89500+%E2%80%93+Marsangy&aq=&sll=48.117173,3.234015&sspn=0.046987,0.110979&ie=UTF8&hq=Francine+Boura&hnear=81+Rue+des+Fontaines,+89500+Marsangy,+Yonne,+Bourgogne,+France&t=h&ll=48.119394,3.220582&spn=0.003875,0.013872&z=17&iwloc=A">Itinéraire et plan sur Google Maos</a></span></div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Moulin de la Grande Planche'
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });

                infowindow.open(map,marker);
            }

        </script>
    </body>
</html>
