<?php

/**
 * 	Autoload any classes that is required
 * 	@param string $className the class name
 */
function __autoload($className) {
    if (file_exists("classes/" . $className . '.php')) {
        require_once("classes/" . $className . '.php');
    }
}

?>
