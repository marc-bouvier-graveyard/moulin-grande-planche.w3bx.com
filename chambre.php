<?php
$pageName = 'chambre';
$title = 'Chambre';
$description = "";
$keywords = "chambre d'hote , bed and breakfast , bourgogne , burgundy ,  sénonais , sens , b&b , France , Yonne , rural houses ";
$extraScripts = '    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>    <script>		!window.jQuery && document.write(\'<script src="jquery-1.4.3.min.js"><\/script>\');	</script>	<script type="text/javascript" src="/js/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>	<script type="text/javascript" src="/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>	<link rel="stylesheet" type="text/css" href="/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />';
include_once 'header.php';
?>
<div class="grid_12">    
    <img src="/images/banners/banner_pic01.jpg" /></div>
<div class="clear"></div>
<div class="grid_6 prefix_3 suffix_3">
    <h2 style="text-align: center">Prix  <?php echo date("Y"); ?>    </h2>
    <table width="270px" style="margin-left:80px;margin-right:80px;">
         <tbody>
            <tr>
                <td style="text-align: right ;padding-right: 30px;">1 personne</td>
                <td style="text-align: left; padding-left: 5px;">60 euros</td>
            </tr>
            <tr>
                <td style="text-align: right; padding-right: 30px">2 personnes</td>
                <td style="text-align: left;padding-left: 5px;">70 euros</td>
            </tr>
            <tr>
            </tr>
        </tbody>
    </table>
    <p style="text-align: center">
Taxe de s&eacute;jour en suppl&eacute;ment : 1,50 euro par personne et par nuit
     pr&eacute;lev&eacute;e par la Communaut&eacute; de Communes de Sens<br/><br/>
        Petit d&eacute;jeuner inclus<br/>
        du 1er Avril au 15 Novembre<br/><br/>
        Jardin et salon-s&eacute;jour à disposition. <br/>  
        Bibliothèque et accès à internet par la wifi.<br>
        Parking dans la cour.<br/><br/>
        Golf et équitation à proximité
    </p>
</div>
<div class="grid_4 prefix_1 suffix_1"></div>
<div class="clear"></div>
<div class="grid_8 prefix_2 suffix_2">  
    <a  href="/images/web_pic11.jpg" class="box" >
        <img src="images/thumbs620/thumb_620_web_pic11.jpg" alt=""></a>
    <a  href="/images/web_pic10.jpg" class="box" >
        <img style="margin-bottom:2px" src="images/thumbs620/thumb_620_web_pic10.jpg" alt=""></a>
    Photographie - Anne de Henning -
    <script type="text/javascript" >
        mail2("dehenni","club-internet",14,"","dehenni@club-internet.fr","club-internet")
    </script>
    <noscript> dehenni[remplacer par @]club-internet.fr</noscript></div>
<div class="clear"></div><!-- end .grid_11 -->
<script type="text/javascript">   
    $(document).ready(function()
    {
        /*         *   Examples - images         */
        $("a.box").fancybox();
    });
</script>
<?php

include_once 'footer.php';