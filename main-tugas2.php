<?php
require_once ('functions.php');

$url = $_GET['url'] ?? '../index.php';
$url = parse_url($url, PHP_URL_PATH);
$delurl = explode('/', $url);
$url = end($delurl);


switch ($url) {
    case 'admin':
        $action = $_GET['loggedIn'] ?? '';
        if($action === 'true'){
            Admin::login_save();
        }  
        else{
            Admin::login_form();    
        }
        break;
    case 'dashboard':
        Admin::dashboard();
        break;
    case 'login':
        $action = $_GET['status'] ?? '';
        if($action === 'true'){
            Customer::login_save();
        }  
        else{
            Customer::login_form();
        }
        break;
    case 'register':
        $action = $_GET['action'] ?? '';
        if($action === 'save'){
            Customer::register_save();
        }  
        else{
            Customer::register_form();
        }
        break;
    case 'profile':
        $action = $_GET['action'] ?? '';
        if($action === 'edited'){
            Customer::profile_edited();
        }  
        else{
            Customer::profile();
        }
        break;
    case 'item':
        $id = $_GET['id'] ?? 0;
        Item::index();
        Item::show($id);
        break;
    case 'cart':
        $id = $_GET['id'] ?? 0;
        Cart::index($id);
        break;
    case 'order':
        $id = $_GET['id'] ?? 0;
        if ($id == 0){
            Order::index();
        } else{
            Order::index();
            Order::show($id); 
        }    
        break;
    case 'contact':
        Contact::index();
        break;
    case 'logout':
        Customer::logout();
        break;
    default:
        Home::index();
}
