<?php

spl_autoload_register('Autoload::loadFromDir');
spl_autoload_register('Autoload::loadDefault');

class Autoload
{
    public static function loadFromDir(string $class)
    {
        $path_file = str_replace("\\", "/", $class) . ".php";

        if (file_exists($path_file)) {
            require_once $path_file;
            return true;
        }

        return false;

    }

    public static function loadDefault(string $class)
    {
        $models_file = 'Models/' . $class . '.php';
        $controller_file = 'Controllers/' . $class . '.php';
        if (file_exists($models_file)) {
            require_once $models_file;
            return true;
        }else if (file_exists($controller_file)) {
            require_once $controller_file;
            return true;
        }

        return false;

    }

}
