<?php

namespace App\Http;

class Request {
    public $uri;
    public $method;

    public  function __construct() {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

        return $this;
    }
}