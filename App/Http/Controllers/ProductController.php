<?php

namespace App\Http\Controllers;
use App\Gates\AdminGate;
use App\Models\Comment;
use App\Models\Product;
/*
 *  IndexController will take the role of indexing 3x3 products on the first page, as per project request
 *  and current routing methods.
 *
 *  The list method will continue the pagination.
 */

class ProductController {

    public function index() {

        /*
         *  list method will be used for indexing.
         */

        if (AdminGate::open()) {
            $data = new Product();
            $products = $data->fetchAll();

            return view("product/index", compact("products"));
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

            $directory = "../storage/product/images/";
            $file = $directory . $randomName;
//        $fileType = pathinfo($file, PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['image']['tmp_name'], $file);
            $product->image = $randomName;
            $product->store($product);
            return redirect("product");
        } else return unauthorized();
    }

    public function edit($id)
    {
        if (AdminGate::open()) {
            $product = new Product();
            $product = $product->findById($id);
            return view("product/edit", compact("product"));
        } else return unauthorized();
    }

    public function update($id)
    { //thought to find it and then edit it?
        if (AdminGate::open()) {
            $product = new Product();
            $product->id = $_POST['id'];
            $product->title = $_POST['title'];
            $product->description = $_POST['description'];
            $product->update($product);

            return redirect("product");
        } else return unauthorized();
    }

    public function list($page) {
        $products = new Product();
        $products = $products->paginate($page);
        $comments = new Comment();
        $comments = $comments->findMultipleByParameter("product_id", 0);

        return view("index/index", compact("products", "page", "comments"));
    }

    public function show($id) {
        $product = new Product();
        $product = $product->findById($id);
        $comments = new Comment();
        $comments = $comments->approvedOnly($id);

        return view("product/show", compact("product", "comments"));
    }

}