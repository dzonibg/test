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

        $st = "INSERT INTO products (title, description, image) VALUES( :title, :description, :image)";
        $statement = $this->db()->prepare($st);
        $statement->execute([
            "title" => $title,
            "description" => $description,
            "image" => $image
        ]);
    }

    public function update(Product $product) {
        $st = "UPDATE products SET title=?, description=? WHERE id=?";
        $statement = $this->db()->prepare($st);
        $statement->execute([$product->title, $product->description, $product->id]);

    }

    public function paginate($page) {
        $items = 9;
        $max = $page * $items;
        $min = $max - $items;
        $st = "SELECT * FROM products WHERE id <= ? AND id > ? ORDER BY id ASC";
        $statement = $this->db()->prepare($st);
        $statement->execute([$max, $min]);
        return $statement->fetchAll();
    }

}