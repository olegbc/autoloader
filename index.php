<?php

use lib\Github\Api\Gist\Comments;
use lib\Github\HttpClient\Message\ResponseMediator;

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function ($class) {
    include str_replace("\\", "/", $class) . ".php";
});

/** @var ResponseMediator $class */
$responseMediator = new ResponseMediator();

echo $responseMediator->getApiLimit();


$comments = new Comments();
