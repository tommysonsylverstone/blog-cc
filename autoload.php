<?php

class Autoload {
    public static function inclusionAuto($className) {
        $path = str_replace('\\', '/', $className) . ".class.php";
        require_once($path);
    }
}

spl_autoload_register(array('Autoload', 'inclusionAuto'));