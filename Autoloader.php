<?php

class Autoloader
{
    private static $classFilename;

    public static function loadClass($className)
    {
        $pathParts = explode('\\', $className);
        $filePart = array_pop($pathParts);
        self::$classFilename = $filePart . '.php';
        if (file_exists(self::$classFilename)) {
            require_once(self::$classFilename);
        }
    }
}

spl_autoload_register(array('Autoloader', 'loadClass'));