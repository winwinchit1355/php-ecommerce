<?php

use Dotenv\Dotenv;



define("APP_ROOT",realpath(__DIR__.'/../../')); //call base path

require_once APP_ROOT.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(APP_ROOT);
$dotenv->load();

