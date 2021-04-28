<?php

require_once '../vendor/autoload.php';

//debug

$router = new \App\Http\Router();
echo $router->controller;
echo $router->action;
echo $router->parameters;