<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Gates\AdminGate;

class AdminController {

    public function index() {
        if (AdminGate::open()) {
        return view("admin/index");
        } else return unauthorized();
    }

    public function register() {
        return view("admin/register");
    }

    public function create() {
        $admin = new Admin();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (!$this->checkIfEmailExists($email)) {
            $admin->insert("NULL, '$name', '$email', '$password'");
            $gate = new AdminGate();
            $gate->Authorize($email, $_POST['password']);
            return redirect("");
        } else return redirect("error/email_exists");
    }

    public function login() {
        return view("admin/login");
    }

    public function authorize() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $gate = new AdminGate();
        $auth = $gate->Authorize($email, $password);
        return redirect("");

    }

    public function authcheck() {
        var_dump(AdminGate::open());
    }

    public function logout() {
        $gate = new AdminGate();
        $gate->Deauthorize();
        return redirect("");
    }

    public function checkIfEmailExists($email) {
        $admin = new Admin();
        $admin = $admin->findByParameter("email", $email);
        return $admin;
    }

}