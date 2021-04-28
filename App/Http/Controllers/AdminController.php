<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Gates\AdminAuth;

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

        $admin->insert("NULL, '$name', '$email', '$password'"); // TODO: Check if email exists!
    }

    public function login() {
        return view("admin/login");
    }

    public function authorize() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // gate try
        $gate = new AdminAuth();
        $auth = $gate->Authorize($email, $password);
        var_dump($auth);

    }

    public function authcheck() {
        var_dump(AdminAuth::open());
    }

}