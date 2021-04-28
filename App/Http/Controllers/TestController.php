<?php

namespace App\Http\Controllers;

class TestController {
    public function index() {
        return redirect("");
    }

    public function show($id) {
        echo "Hit show " . $id;
    }
}