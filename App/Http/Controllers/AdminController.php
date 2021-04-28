<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AdminController {

    public function index() {
        return view("admin/index");
    }

    public function register() {
        return view("admin/register");
    }

    public function create() {
        $admin = new Admin();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $admin->insert("NULL, '$name', '$email', '$password'");
    }

}