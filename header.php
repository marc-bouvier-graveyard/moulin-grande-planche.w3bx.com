<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta http-equiv="content-language" content="fr-FR"/>
        <meta name="language" content="fr-FR"/>
        <meta name="description" content="Chambre d'hôte dans l'Yonne, dans un ancien petit moulin du XIXème siecle. Cadre rural, calme et verdoyant. A proximité de Sens et de Villeneuve-sur-Yonne."/>
        <meta name="robots" content="index, follow, all"/>
        <meta name="keywords" content="Chambre d'hote, chambre d'hôte, 89 ,89500, bed and breakfast , Bourgogne , Burgundy ,  sénonais , sens , b&b , France , Yonne , inn , rural houses"/>
        <title>Le Moulin de la Grande Planche - Chambre d'hote - 89500 - <?php echo $title; ?></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="/js/mailAntispam.js"></script>
        <script type="text/javascript" src="/js/mylib.js"></script>
		<script type="text/javascript" src="https://widget.itea.fr/js/itea_widget.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
		
		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="/js/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>

		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		
        <?php echo $extraScripts; ?>
        
    </head>
    <body>
        <div class="container_12" style="background:transparent;margin-bottom: 0px;margin-top:5px">
            <div class="top-border"><h1>
                    Le Moulin de la Grande Planche
                </h1></div>

            <div class="clear"></div>
        </div>
        <div class="container_12" style="min-height: 575px;margin-bottom : 0px;">



            <div id="language_bar" class="grid_12">
                <ul>

                    <li style="font-weight: bold">Français</li>
                    <li><a href="/en/index.php" >English</a></li>
                </ul>
            </div>

            <div class="grid_12">
                <h2>Chambre d'hôte dans l'Yonne
                </h2>
            </div>
            <div class="clear"></div>

            <?php

            function showMenu($pageName) {


                //$result = '<img src="images/logos/logo_tiny.png" alt=""/>';
                $result = '<div id="centeredmenu" >';
                $result .= '<ul>';
                if ($pageName == 'index') {
                    $result .= '<li ><a class="active" href="index.php">Accueil</a></li>';
                } else {
                    $result .= '<li><a href="index.php">Accueil</a></li>';
                }

                if ($pageName == 'chambre') {
                    $result .= '<li "><a class="active" href="chambre.php">La Chambre</a></li>';
                } else {
                    $result .= '<li><a href="chambre.php">La Chambre</a></li>';
                }

                if ($pageName == 'contact') {
                    $result .= '<li><a class="active" href="contact.php">Contact</a></li>';
                } else {
                    $result .= '<li><a href="contact.php">Contact</a></li>';
                }

                $result .= '</ul>';
                $result .= '</div>';

                return $result;
            }
            
            ?>
            <div class="grid_12">
<?php
             echo showMenu($pageName);
?>
            </div>
            <!-- end .grid_12 -->
            <div class="clear"></div>