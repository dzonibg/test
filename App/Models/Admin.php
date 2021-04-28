<?php

namespace App\Models;

class Admin extends Model {

    public function __construct() {
        $this->tableName = "admins";
    }
}