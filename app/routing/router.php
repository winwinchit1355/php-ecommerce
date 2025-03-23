<?php

$router = new AltoRouter();

// $router->setBasePath('/php-ecommerce/public');

$router->map('GET','/post',"","Home Route");

$match = $router->match();

