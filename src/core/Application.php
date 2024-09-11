<?php

namespace App\Core;

use App\Controllers\Controller;

class Application
{
    public static string $pathname;
    public Router $router;
    public Request $request;
    public Controller $controller;
    public Response $response;
    public static Application $app;
    public function __construct($rootPath)
    {
        self::$pathname = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
