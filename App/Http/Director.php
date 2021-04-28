<?php

namespace App\Http;

class Director {

    public $controller;
    public $action;
    public $parameters;

    public $errors = false;
    public $router;

    public function __construct() {
        $this->router = new Router();
        $this->controller = $this->router->controller;
        $this->action = $this->router->action;
        $this->parameters = $this->router->action;

        $this->findController();
        $this->findAction();
    }

    public function findController() {
        if ($this->controller == "") {
            $this->controller = "Index";
        }

        $this->controller = ucfirst($this->controller) . "Controller";

        if ((!class_exists('App\\Controllers\\' . $this->controller)) &&
            ($this->controller != "IndexController")) {
            $this->errors = true;
            $this->controller = "ErrorController";
            $this->action = "classNotFound";
        }
    }

    public function findAction() {
        $this->action = $this->router->action;
    }
}