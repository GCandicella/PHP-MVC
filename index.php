<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use app\core\Application;

require_once __DIR__.'/vendor/autoload.php';

$app = new Application();

$app->router->get('/MyMVC/', function (){
    return "Hello";
});

$app->router->get('/MyMVC/user', function (){
    return "User Page";
});

$app->run();