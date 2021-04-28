<?php

namespace App\Gates;
use App\Models\Admin;

class AdminGate {

    public static function open() {
        if (isset($_SESSION['is_admin'])) {
            if ($_SESSION['is_admin']) {
                return true;
            } else return false;
        } else return false;
    }

    public function Authorize($email, $password) {
        $attempt = new Admin();
        $admin = $attempt->findByParameter("email", $email);
        $verification = password_verify($password, $admin->password);
        if ($verification) {
            $_SESSION['is_admin'] = true;
            $_SESSION['name'] = $admin->name;
            $_SESSION['email'] = $admin->name;
            return $admin;
        }
    }

    public function Deauthorize() {
        session_destroy();
    }


}