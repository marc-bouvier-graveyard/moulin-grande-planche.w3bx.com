<?php

/**
 * Description of Page
 *
 * @author Marc Bouvier <m.bouvier.dev@gmail.com>
 */
class Page {

    private $description;
    private $specificKeywords;
    private $title;
    private $header = "Moulin de la grande planche";
    private $page;

    function __construct($description, $specificKeywords, $pageName, $title="") {
        $this->description = $description;
        $this->specificKeywords = $specificKeywords;
        $this->title = $title;
        $this->page = $pageName;
    }

    //put your code here
    public function showHead($extraScript="") {
?>
       
        <?php
    }

    public function showMenu() {


        //$result = '<img src="images/logos/logo_tiny.png" alt=""/>';
        $result = '<div id="centeredmenu" >';
        $result .= '<ul>';
        if ($this->page == 'index') {
            $result .= '<li ><a class="active" href="index.php">Accueil</a></li>';
        } else {
            $result .= '<li><a href="index.php">Accueil</a></li>';
        }

        if ($this->page == 'presentation') {
            $result .= '<li "><a class="active" href="presentation.php">Présentation</a></li>';
        } else {
            $result .= '<li><a href="presentation.php">Présentation</a></li>';
        }

        if ($this->page == 'atelier') {
            $result .= '<li"><a class="active" href="atelier.php">Atelier</a></li>';
        } else {
            $result .= '<li><a href="atelier.php">Atelier</a></li>';
        }

        if ($this->page == 'restauration') {
            $result .= '<li"><a class="active" href="restauration.php">Restauration</a></li>';
        } else {
            $result .= '<li><a href="restauration.php">Restauration</a></li>';
        }

        if ($this->page == 'creation') {
            $result .= '<li"><a class="active" href="creation.php">Création</a></li>';
        } else {
            $result .= '<li><a href="creation.php">CrÃ©ation</a></li>';
        }

        if ($this->page == 'autres_services') {
            $result .= '<li><a class="active" href="autres_services.php">Autres Services</a></li>';
        } else {
            $result .= '<li><a href="autres_services.php">Autres Services</a></li>';
        }

        if ($this->page == 'contact') {
            $result .= '<li><a class="active" href="contact.php">Contact</a></li>';
        } else {
            $result .= '<li><a href="contact.php">Contact</a></li>';
        }

        $result .= '</ul>';
        $result .= '</div>';

        return $result;
    }

}
        ?>
