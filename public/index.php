<?php

use App\Core\Application;
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/core/Application.php';

$app = new Application(dirname(__DIR__));
// echo "<pre>";
// var_dump(dirname(__DIR__));
// var_dump((__DIR__));
// echo "</pre>";
$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->run();