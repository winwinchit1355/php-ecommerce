<?php

namespace App\Routing;

use AltoRouter;

class RouteDispatcher{
    private $match;
    private $controller;
    private $method;
    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        if($this->match){
            list($controller, $method) = explode('@', $this->match['target']);
            echo $this->controller = $controller;
            echo $this->method = $method;
        }else{
            header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
            echo 'Not match route';
        }
    }
}