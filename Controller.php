<?php

namespace phyohtetaung\phpmvc;

use phyohtetaung\phpmvc\middlewares\BaseMiddleware;

class Controller
{
    public $layout = 'main';
    public $action = '';
    protected $middlewares = []; // BaseMiddleware

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares()
    {
        return $this->middlewares;
    }
}
