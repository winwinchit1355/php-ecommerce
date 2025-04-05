<?php

use App\Classes\Database;

if (!isset($_SESSION)) {
    session_start();
}

define("APP_ROOT", realpath(__DIR__.'/../')); //call base path
define('APP_URL', "http://php-ecommerce.test"); 

require_once APP_ROOT.'/vendor/autoload.php';

require_once APP_ROOT.'/app/config/_env.php';

new Database();

require_once APP_ROOT.'/app/routing/router.php';
