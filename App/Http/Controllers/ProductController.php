<?php

namespace App\Http\Controllers;
use App\Gates\AdminGate;
use App\Models\Product;
/*
 *  IndexController will take the role of indexing 3x3 products, as per project request
 *  and current routing methods.
 */

class ProductController {

    public function index() {
        if (AdminGate::open()) {
            return view("product/index");
        } else unauthorized();
    }

    public function create() {
        if (AdminGate::open()) {
            return view("product/create");
        } else unauthorized();
    }

    public function store() {
        if (AdminGate::open()) {
            $product = new Product();
            $product->title = $_POST['title'];
            $product->description = $_POST['description'];
            $product->image = "image";
            $randomName = str_shuffle("abcdefgh") .
                rand(10000, 99999) . str_shuffle("ijklmnopqrst") . rand(1000, 9999) . ".jpg";
            var_dump($_FILES["image"]);
            $directory = "../storage/product/images/";
            $file = $directory . $randomName;
//        $fileType = pathinfo($file, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['image']['tmp_name'], $file);
            $product->image = $randomName;
            $product->store($product);
            return redirect("products");
        } else unauthorized();
    }

}