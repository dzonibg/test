<?php

namespace App\Http\Controllers;

use App\Models\Test;

class TestController {
    public function index() {
        layout();
    }

    public function show($id) {
        $test = new Test();
        $test = $test->findById($id);
        var_dump($test);
    }

    public function insertDummy() {
        $test = new Test();
        $test->insert("NULL, 'Nikola', 'n@n.com'");
        echo "Added dummy data.";
    }

}