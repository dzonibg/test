<?php

namespace App\Http\Controllers;

class TestController {
    public function index() {
        echo "Hit test index.";
    }

    public function show($id) {
        echo "Hit show " . $id;
    }
}