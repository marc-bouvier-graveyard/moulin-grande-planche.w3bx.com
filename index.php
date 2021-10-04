<?php
error_reporting(E_ALL);
require_once ("autoload.php");
$pageName = 'index';
$title = 'Accueil';
$description = "";
$keywords = "chambre d'hote , bed and breakfast , bourgogne , burgundy ,  senonais , sens , b&b , France ,Villeneuve, sur, Yonne , rural houses ";
$extraScripts = '';
include_once 'header.php';
?>
<div class="grid_12" style="margin-bottom:25px">  
    <img alt="" src="/images/banners/banner_pic01.jpg" />
</div>
<div class="clear" ></div>
<div class="grid_10 prefix_1 suffix_1" style="margin-bottom:25px">   
    <p style="text-align: center;">        
        Une chambre d'hôtes A 9 Km de <a href="http://www.villeneuve-yonne-tourisme.com/">Villeneuve-sur-Yonne</a> 15 Km de <a href="http://ville-sens.fr/">Sens</a><br/>
        Dans un ancien petit moulin du XIXème siècle.    
    </p>
</div>
<div class="clear"></div>
<div class="grid_6 prefix_1">
    <a href="/images/web_pic05.jpg" class="box" >
        <img src="images/thumbs460/thumb_460_pic05.jpg" alt=""/>
    </a>
    <div style="margin-bottom:13px;">
        <a class="box" href="/images/web_pic01.jpg" title="Photographie - Anne de Henning - dehenni@club-internet.fr" >
            <img style="margin-bottom:2px;" src="/images/thumbs460/thumb_460_pic01.jpg" alt=""/>
        </a>    </div> 	<a class="box" href="/images/web_pic06.jpg"  >
        <img src="images/thumbs460/thumb_460_pic06.jpg" alt=""/>
    </a>
  <!--
    <a class="box" href="/images/web_pic09.jpg"  >
        <img src="images/thumbs460/thumb_460_pic09.jpg" alt=""/>
    </a>
    -->
        <a class="box" href="/images/20141101_092300.jpg"  >
        <img src="images/thumb_20141101_092300.jpg" alt=""/>
    </a>
    
        <a class="box" href="/images/20141101_092342.jpg"  >
        <img src="images/thumb_20141101_092342.jpg" alt=""/>
    </a>
    
        <a class="box" href="/images/thumb_cassis_05_14.jpg"  >
        <img src="images/thumb_cassis_05_14.jpg" alt=""/>
    </a>
    
        <a class="box" href="/images/thumb_S8301873.jpg"  >
        <img src="images/thumb_S8301873.jpg" alt=""/>
    </a>
    
    

</div><!-- end .grid_1 --><div class="grid_4">
    <a class="box" href="/images/web_pic04.jpg"  >
        <img src="images/thumbs300/thumb_pic04.jpg" alt=""/>
    </a>
    <a class="box" href="/images/web_pic02.jpg"  >
        <img src="images/thumbs300/thumb_pic02.jpg" alt=""/>
    </a>
    <a class="box" href="/images/web_pic07.jpg"  >
        <img src="images/thumbs300/thumb_pic07.jpg" alt=""/>
    </a>
    <a class="box" href="/images/web_pic08.jpg"  >
        <img src="images/thumbs300/thumb_pic08.jpg" alt=""/>
    </a>
        <a class="box" href="/images/web_pic12.jpg"  title="Photographie - Anne de Henning - dehenni@club-internet.fr">
        <img src="images/thumbs300/thumb_pic12.jpg" alt=""/>
    </a>
    <a class="box" href="/images/web_pic03.jpg"  >
        <img src="images/thumbs300/thumb_pic03.jpg" alt=""/>
    </a>
     
</div>
<div class="clear"></div><!-- end .grid_11 -->
<script type="text/javascript">
    $(document).ready(function() {
        /*         *   Examples - images         */
        $("a.box").fancybox();
    });
</script>
<?php include_once 'footer.php'; ?>
