<?php

use App\Routing\RouteDispatcher;

$router = new AltoRouter();

// $router->setBasePath('/php-ecommerce/public');

$router->map('GET', '/', "App\Controllers\HomeController@index", "Home Route");

new RouteDispatcher($router);
