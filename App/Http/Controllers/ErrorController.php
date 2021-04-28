<?php

namespace App\Http\Controllers;

class ErrorController {

    public function methodNotFound() {
        echo "Method not found.";
    }

    public function classNotFound() {
        echo "Class not found.";
    }
}