<?php

class Autoloader
{
    private static $config;

    public static function setConfig(array $config)
    {
        self::$config = $config;
    }

    private static function getPath($class)
    {
        $configData = self::$config;

        $root = explode('\\', $class);

        return $configData['packeges'][$root[0]];
    }

    public static function autoload($class)
    {
        $path = self::getPath($class);
        include $path . str_replace("\\", "/", $class) . ".php";
    }
}

spl_autoload_register([Autoloader::class, 'autoload']);
