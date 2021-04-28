<?php

require_once '../vendor/autoload.php';

//debug

$router = new \App\Http\Director();
echo $router->controller;
echo $router->action;
echo $router->parameters;