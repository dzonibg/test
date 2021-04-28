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
        $this->parameters = $this->router->parameters;

        $this->findController();
        $this->findAction();

        $this->direct();
    }

    public function findController() {
        if ($this->controller == "") {
            $this->controller = "Index";
        }

        $this->controller = ucfirst($this->controller) . "Controller";

        if ((!class_exists('App\\Http\\Controllers\\' . $this->controller)) &&
            ($this->controller != "IndexController")) {
            $this->errors = true;
            $this->controller = "ErrorController";
            $this->action = "classNotFound";
        }
    }

    public function findAction() {

        if ($this->errors != true) {
            $setAction = $this->action;

            if ((method_exists("\\App\\Http\\Controllers\\" . $this->controller, $this->action)) &&
                ($this->action != "")) {
                $this->action = $setAction;
            }

            if ((is_numeric($this->action)) && (method_exists("App\\Http\\Controllers\\" . $this->controller,
                "show"))) {
                $this->action = "show";
                $this->parameters = $setAction; //2nd URI parameter is actually a parameter; not an action/method
            }
            else if ((method_exists("App\\Http\\Controllers\\" . $this->controller, "index")) &&
                ($setAction == "")) {
                $this->action = "index";
            }
            if (!method_exists("App\\Http\\Controllers\\" . $this->controller, $this->action)) {
                $this->controller = "ErrorController";
                $this->action = "methodNotFound";
                $this->errors = true;
            }
        }
    }

    public function direct() {
        $ctrl = "App\\Http\\Controllers\\" . $this->controller;
        $ctrl = new $ctrl;
        call_user_func(array($ctrl, $this->action), $this->parameters); // Maybe another class for dispatching?
    }

}