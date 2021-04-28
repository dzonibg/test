<?php

namespace App\Models;

class Product extends Model {

    public function __construct() {
        $this->tableName = "products";
    }

}