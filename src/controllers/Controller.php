<?php

namespace App\Controllers;

use App\Core\Application;

class Controller
{

    public string $layout = "main";
    public function render($view, $params = []): array|string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}
