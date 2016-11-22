<?php

class ClassLoader
{
    public function autoloader($class) {
        spl_autoload_register(function ($class) {
            include str_replace("\\", "/", $class) . ".php";
        });
    }

}