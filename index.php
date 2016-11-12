<?php

//use lib\ApplicationSome;

//spl_autoload(Application, '.php');

//define('CLASS_DIR', 'lib/');
//set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//spl_autoload_extensions('.php');
//spl_autoload_register();

//require_once 'lib/Application.php';

spl_autoload_register(function ($class) {
    //echo $class . "<br />";
    //$classChanged =  str_replace("\\", "/", $class);
    include str_replace("\\", "/", $class) . ".php";
});

$class = new lib\ApplicationSome();

echo $class;