<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Comment;

class IndexController {

    public function index() {
        $products = new Product();
        $products = $products->fetchAll();

        return view("index/index", compact("products"));
    }

    public function show() {
        echo "Showing particular item.";
    }
}