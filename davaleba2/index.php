<?php

include_once "includes/request.php";
include_once "includes/response.php";
require 'Router.php';

$path = parse_url( trim( $_SERVER['REQUEST_URI'], '/' ), PHP_URL_PATH);

//echo $path;

$router = new Router;
$router->get('', 'views/default.php');
$router->get('page1', 'views/page1.php');
$router->get('page2', 'views/page2.php');
require $router->run($path);

?>
