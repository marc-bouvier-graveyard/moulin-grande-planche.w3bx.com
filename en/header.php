<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta http-equiv="content-language" content="en"/>
        <meta name="language" content="en"/>
        <meta name="description" content="Bed and Breakfast in Yonne (Burgundy), in an old mill from the XIXth century. Set in beautiful rural, quiet and leafy surroundings . Next to Sens and Villeneuve-sur-Yonne cities."/>
        <meta name="robots" content="index, follow, all"/>
        <meta name="keywords" content="Bed and Breakfast ,Chambre d'hote, chambre d'hôte , Bourgogne , Burgundy ,  sénonais , sens , b&b , France , Yonne , inn , rural houses"/>
        <title>Le Moulin de la Grande Planche - <?php echo $title; ?></title>
        <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="/js/mailAntispam.js"></script>
        <script type="text/javascript" src="/js/mylib.js"></script>
	
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		
		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="/js/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		
			<script type="text/javascript" src="https://widget.itea.fr/js/itea_widget.js"></script>
		
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
                    <li><a href="/index.php" >Français</a></li>
                    <li style="font-weight: bold">English</li>
                </ul>
            </div>
            <div class="grid_12">
                <h2>Bed and Breakfast in Burgundy
                </h2>
            </div>
            <div class="clear"></div>
            <?php
            function showMenu($pageName) {
                //$result = '<img src="images/logos/logo_tiny.png" alt=""/>';
                $result = '<div id="centeredmenu" >';
                $result .= '<ul>';
                if ($pageName == 'index') {
                    $result .= '<li ><a class="active" href="index.php">Home</a></li>';
                } else {
                    $result .= '<li><a href="index.php">Home</a></li>';
                }
                if ($pageName == 'chambre') {
                    $result .= '<li "><a class="active" href="chambre.php">The room</a></li>';
                } else {
                    $result .= '<li><a href="chambre.php">The room</a></li>';
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