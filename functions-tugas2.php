<?php
function view ($page,$data=[]) {
    include 'view/'.$page.'.php';
}

function titleheader($string, $type, ) {
    echo 
    "<$type" .  ">" . 
        $string . 
    "</$type>";
}

    class Admin {
    public static function login_form() {  
        view('admin-panel/admin-login');
    }

    public static function login_save() {
        echo "<script>alert('login berhasil')</script>";
        exit();
    }

    public static function dashboard() {
        view('admin-panel/admin-dashboard');
    }
}

class Customer {
    public static function login_form() {
        view('forms/customer-login');
    }

    public static function login_save() {
        echo "<script>alert('login berhasil')</script>";
    }

    public static function register_form() {
        view('forms/customer-register');
    }

    public static function register_save() {
        echo "<script>alert('register berhasil')</script>";
    }

    public static function profile() {
        view('forms/customer-profile');
    }

    public static function profile_edited() {
        echo "<script>alert('profile sedang di edit')</script>";
    }
    public static function logout() {
        view('forms/customer-login');
    }
}

class Home {
    public static function index() {
        view('shop/home');
    }
}

class Item {
    public static function index() {
        view('shop/item');
    }

    public static function show($id) {
        view('shop/item');
    }
}

class Cart {
    public static function index() {
        view('shop/cart');
    }
}

class Order {
    public static function index() {
        view('shop/order');
    }

    public static function show($id) {
        view('shop/order');
    }
}

class Contact {
    public static function index() {
        view('shop/contact');
    }
}


?>
