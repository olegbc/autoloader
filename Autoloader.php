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

        return $configData['packages'][$root[0]];
    }

    /**
     * @param $class
     * @throws Exception
     */
    public static function autoload($class)
    {
        $path = self::getPath($class);
        $file = $path . str_replace("\\", "/", $class) . ".php";
        if (!file_exists($file)){
            throw new \Exception;
        }
        include $file;
    }
}

spl_autoload_register([Autoloader::class, 'autoload']);
