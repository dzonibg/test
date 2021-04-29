<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Comment;

class IndexController {

    public function index() {
        $products = new Product();
        $products = $products->paginate(1);
        $page = 1;
        $comments = new Comment();
        $comments = $comments->findMultipleByParameter("product_id", 0);

        return view("index/index", compact("products", "page", "comments"));
    }

}