<?php

namespace App\Models;

class Product extends Model {

    public function __construct() {
        $this->tableName = "products";
    }

    public function store(Product $product) {
        $title = $product->title;
        $description = $product->description;
        $image = $product->image;
        var_dump($product);

        $st = "INSERT INTO products (title, description, image) VALUES( :title, :description, :image)";
        $statement = $this->db()->prepare($st);
        $statement->execute([
            "title" => $title,
            "description" => $description,
            "image" => $image
        ]);
    }

    public  function update(Product $product) {
        $st = "UPDATE products SET title=?, description=? WHERE id=?";
        $statement = $this->db()->prepare($st);
        $statement->execute([$product->title, $product->description, $product->id]);

    }

}