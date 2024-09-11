<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/core/Application.php';

use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;

$app = new Application(dirname(__DIR__));
// echo "<pre>";
// var_dump($router);
// echo "</pre>";
$router = $app->router;
$router->get('/', [SiteController::class, "home"]);

$router->get('/contact', [SiteController::class, "contact"]);

$router->post("/contact", [SiteController::class, "handleContact"]);

$router->get('/login', [AuthController::class, "login"]);

$router->post("/login", [AuthController::class, "login"]);

$router->get('/register', [AuthController::class, "register"]);

$router->post("/register", [AuthController::class, "register"]);

$app->run();
