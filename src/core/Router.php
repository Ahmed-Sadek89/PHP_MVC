<?php

namespace App\Core;

class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();

        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            $this->response->setStatusCode(404);
            $layoutContent = $this->renderLayout();
            $viewContent = $this->renderOnlyView(null);

            return str_replace("{{content}}", $viewContent, $layoutContent);
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        return call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutContent = $this->renderLayout();
        $viewContent = $this->renderOnlyView($view);

        return str_replace("{{content}}", $viewContent, $layoutContent);
    }

    protected function renderLayout()
    {
        ob_start();
        require_once Application::$pathname . "/src/views/layout/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        $pagename = $view ?? '404';
        require_once Application::$pathname . "/src/views/$pagename.php";
        return ob_get_clean();
    }
}
