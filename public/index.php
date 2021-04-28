<?php

require_once '../vendor/autoload.php';

//debug

$router = new \App\Http\Director();
echo "<br>";
echo $router->controller;
echo "<br>";
echo $router->action;
echo "<br>";
echo $router->parameters;