<?php

namespace App\Http\Controllers;

class IndexController {

    public function index() {
        return view("index/index");
    }

    public function show() {
        echo "Showing particular item.";
    }
}