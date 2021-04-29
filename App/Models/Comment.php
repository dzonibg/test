<?php

namespace App\Models;

class Comment extends Model {

    public function __construct() {
        $this->tableName = "comments";
    }

}