<?php

namespace App\Http\Controllers;

class ErrorController {

    public function methodNotFound() {
        echo "Method not found.";
    }

    public function classNotFound() {
        echo "Class not found.";
    }

    public function unauthorized() {
        return view("errors/unauthorized");
    }

    public function email_exists() {
        echo "Email already exists.";
    }

}