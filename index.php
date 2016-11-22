<?php

use lib\Github\Api\Gist\Comments;
use lib\Github\HttpClient\Message\ResponseMediator;
use LibaOne\LibaOneClassOne;
use LibaTwo\LibaTwoClassOne;

error_reporting(E_ALL);
ini_set('display_errors', 1);
//




//spl_autoload_register(function ($class) {
//    include str_replace("\\", "/", $class) . ".php";
//});

//include_once 'LibaOne/LibaOneClassOne.php';

//$config = include  __DIR__ . '/config/data.php';
require_once __DIR__ . '/Autoloader.php';

Autoloader::setConfig(include  __DIR__ . '/config/data.php');



//$loader =  Autoloader::getLoader();
//
///** @var ResponseMediator $class */

$libaOneClassOne = new LibaOneClassOne();
$libaTwoClassOne = new LibaTwoClassOne();


echo $libaOneClassOne->iAm();
echo $libaTwoClassOne->iAm();


//$responseMediator = new ResponseMediator();


//
//echo $responseMediator->getApiLimit();
//
//
//$comments = new Comments();



