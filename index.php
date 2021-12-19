<?php
session_start();
//$action = isset($_GET['action']) ? $_GET['action'] : NULL;
$action = $_GET['action'] ?? NULL;

switch($action){
    case 'list_category':
        include __DIR__. '/category.php';
        break;
    case 'getProducts':
        require __DIR__.'/products.php';
        break;
    case 'getProductDetail':
        require __DIR__. '/productDetail.php';
        break;
    case 'login':
        include __DIR__. '/login.php';
        break;
    case 'register':
        include __DIR__. '/register.php';
        break;
    case 'registerUser':
        include __DIR__. '/registerUser.php';
    default:
        include __DIR__.'/home.php';
        break;
}
?>




