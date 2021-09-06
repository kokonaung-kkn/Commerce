<?php

session_start();

include("../vendor/autoload.php");

use Helpers\HTTP;

$action = $_REQUEST['action'];

switch($action){
    case 'update':
        update();
        break;
    case 'delete':
        delete();
        break;
}

function update(){

    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];

    $cart = [$image,$name,$price,$qty,$pid];

    $_SESSION[$name] = $cart;

}

function delete(){
    $name = $_POST['name'];
    unset($_SESSION[$name]);
}