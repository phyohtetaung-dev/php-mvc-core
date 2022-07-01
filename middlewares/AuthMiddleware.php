<?php

namespace phyohtetaung\phpmvc\middlewares;

use phyohtetaung\phpmvc\Application;
use phyohtetaung\phpmvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    public $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (in_array(Application::$app->getController()->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}
