<?php

use controllers\Controller;

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . "/Autoloader.php";

Autoloader::setConfig(include  __DIR__ . "/config/data.php");

if (!empty($_GET['r'])){
    $route = "controllers\\" . ucfirst($_GET['r']) . "Controller";
    /** @var Controller $controller */
    try{
        $controller = new $route();
    } catch (\Exception $e) {
        http_response_code(404);
        header('Location: http://autoloader/404.php');
        exit;
    }
    if (!$controller) {
        http_response_code(404);
        header('Location: http://autoloader/404.php');
        exit;
    }
    $controller->execute();
}


