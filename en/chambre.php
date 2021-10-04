<?php
error_reporting(E_ALL);
require_once ("autoload.php");
$pageName = 'chambre';
$title = 'Accueil';
$description = "";
$keywords = "chambre d'hote , bed and breakfast , bourgogne , burgundy ,  sénonais , sens , b&b , France , Yonne , rural houses ";
$extraScripts = '';
include_once 'header.php';
?>
<div class="grid_12"> 
    <img src="/images/banners/banner_pic01.jpg" /></div>
<div class="clear"></div><div class="grid_6 prefix_3 suffix_3">
    <h2 style="text-align: center">        Prices  <?php echo date("Y"); ?>    </h2>
    <table width="270px" style="margin-left:80px;margin-right:80px;">
        <tbody>
            <tr>
                <td style="text-align: right ;padding-right: 30px;">
                    1 person</td>
                <td style="text-align: left; padding-left: 5px;">
                    60 euros per night</td>
            </tr>
            <tr>
                <td style="text-align: right; padding-right: 30px">
                    2 people</td>
                <td style="text-align: left;padding-left: 5px;">
                    70 euros per night</td>
            </tr>
        </tbody>
    </table>
    <p style="text-align: center">
    Additional 1,50 euro fee per person and per night withdrawn by Sens's community of commune<br/><br/>
        Petit d&eacute;jeuner inclus<br/>
        Breakfast included.<br/>
        From 1st April to 15th November.<br/>
        <br/>
        Backyard and living-room free to enjoy. <br/>
        Library and wifi internet.<br/>
        Parking lot on the front yard.<br/>
        <br/>
        Equestrian center and  golf course nearby.
    </p></div>
<div class="grid_4 prefix_1 suffix_1"></div>
<div class="clear"></div>
<div class="grid_8 prefix_2 suffix_2">
    <a target="_blank" href="/images/web_pic11.jpg" class="box" >
        <img src="/images/thumbs620/thumb_620_web_pic11.jpg" alt="">
    </a>
    <a target="_blank" href="/images/web_pic10.jpg" class="box" title="Photography - Anne de Henning - dehenni@club-internet.fr" >
        <img style="margin-bottom:2px;" src="/images/thumbs620/thumb_620_web_pic10.jpg" alt="">
    </a></div>
<div class="clear"></div>
<!-- end .grid_11 -->
<script type="text/javascript">
    $(document).ready(function() {
        /*         *   Examples - images         */
        $("a.box").fancybox();
    });</script>
<?php
include_once 'footer.php';
?>