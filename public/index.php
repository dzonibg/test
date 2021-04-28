<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../App/Http/Helpers/helpers.php';
require_once '../config.php';
layout();
//debug

$router = new \App\Http\Director();
echo "<br> <hr> <br>";
echo $router->controller;
echo "<br>";
echo $router->action;
echo "<br>";
echo $router->parameters;

//end debug