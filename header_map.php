<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-FR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta http-equiv="content-language" content="fr-FR"/>
        <meta name="language" content="fr-FR"/>
        <meta name="description" content="Chambre d'hote dans l'yonne"/>
        <meta name="robots" content="index, follow, all"/>
        <meta name="keywords" content="Chambre d'hote, <?php echo $keywords; ?>, Bourgogne  "/>
        <title>Le Moulin de la Grande Planche - <?php echo $title; ?></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <script type="text/javascript" src="js/mailAntispam.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
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
                    <li>Français</li>
                    <li><a href="#"> English</a></li>
                </ul>
            </div>

            <div class="grid_12">
                <h2>Chambre d'hote dans l'Yonne
                </h2>
            </div>
            <div class="clear"></div>

            <?php

            function showMenu() {


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

                if ($pageName == 'Contact') {
                    $result .= '<li"><a class="active" href="contact.php">Contact</a></li>';
                } else {
                    $result .= '<li><a href="contact.php">Contact</a></li>';
                }

                /*
                if ($pageName == 'restauration') {
                    $result .= '<li"><a class="active" href="restauration.php">Restauration</a></li>';
                } else {
                    $result .= '<li><a href="restauration.php">Restauration</a></li>';
                }

                if ($pageName == 'creation') {
                    $result .= '<li"><a class="active" href="creation.php">Création</a></li>';
                } else {
                    $result .= '<li><a href="creation.php">CrÃ©ation</a></li>';
                }

                if ($pageName == 'autres_services') {
                    $result .= '<li><a class="active" href="autres_services.php">Autres Services</a></li>';
                } else {
                    $result .= '<li><a href="autres_services.php">Autres Services</a></li>';
                }

                if ($pageName == 'contact') {
                    $result .= '<li><a class="active" href="contact.php">Contact</a></li>';
                } else {
                    $result .= '<li><a href="contact.php">Contact</a></li>';
                }
                 
                 */

                $result .= '</ul>';
                $result .= '</div>';

                return $result;
            }

            
            ?>




            <div class="grid_12">

<?php
             echo showMenu();
?>
            </div>
            <!-- end .grid_12 -->
            <div class="clear"></div>