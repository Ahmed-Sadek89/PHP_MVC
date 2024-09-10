<?php

use App\Core\Application;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../src/core/Application.php';

$app = new Application();

$app->router->get('/', function() {
    return "hello homepage";
});

$app->router->get('/about', function() {
    return "hello about page";
});

$app->run();