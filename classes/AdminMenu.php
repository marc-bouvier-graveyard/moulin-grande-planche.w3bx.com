<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author Baldir
 */
class AdminMenu {

    public static function show($page) {
        $result = '<img src="../images/logos/logo_tiny.png" alt="cordes frottées-frapppées"/>';
        $result .= '<ul class="navigation">';
        if ($page == 'index') {
            $result .= '<li class="cur_page"><a href="index.php">Index</a></li>';
        } else {
            $result .= '<li><a href="index.php">Index</a></li>';
        }

        if ($page == 'contacts') {
            $result .= '<li class="cur_page"><a href="contacts.php">Contacts</a></li>';
        } else {
            $result .= '<li><a href="contacts.php">Contacts</a></li>';
        }

        $result .= '</ul>';

        return $result;
    }

    public function showSkins($skin) {

        echo $skin;?>
<form action="" method="post" id="from_style" >
    <select id="skin" name="skin" onchange="">
                <option id="jf" value="jf"
        <?php
        if ($skin == 'jf') {
            echo 'selected';
        } ?> >Standard</option>
        <option id="style1" value="style1"
        <?php
        if ($skin == 'style1') {
            echo 'selected';
        } ?> >Style 1</option>
        <option id="style2" value="style2"
        <?php
        if ($skin == 'style2') {
            echo 'selected';
        } ?> >Style 2</option>
        <option id="style3" value="style3"
        <?php
        if ($skin == 'style3') {
            echo 'selected';
        } ?> >Style 3</option>
        <option id="style4" value="style4"
                <?php
                if ($skin == 'style4') {
                    echo 'selected';
                } ?> >Style 4</option>

    </select>
    <input type="submit"/>
</form>
<?php
            }

        }
?>
