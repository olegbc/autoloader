<?php

use controllers\Controller;

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once __DIR__ . "/Autoloader.php";

Autoloader::setConfig(include __DIR__ . "/config/data.php");

$controllersMap = [
    'first' => 'first',
    'second' => 'second'
];

$r = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['r']);

function controllerFilter($r, $controllersMap)
{
    return !empty($controllersMap[$r]) ? $controllersMap[$r] : false;
}

$controllerName =  controllerFilter($r, $controllersMap);

if ($controllerName) {
    $route = "controllers\\" . ucfirst($controllerName) . "Controller";
    /** @var Controller $controller */
    try {
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
} else {
    http_response_code(404);
    header('Location: http://autoloader/404.php');
    exit;
}


