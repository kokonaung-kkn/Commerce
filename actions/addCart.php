<?php

include('../vendor/autoload.php');

use Helpers\HTTP;

session_start();

$image = $_POST['image'];
$name = $_POST['name'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$pid = $_POST['pid'];

$cart = [$image,$name,$price,$qty,$pid];

$_SESSION[$name] = $cart;

HTTP::redirect('/cart.php');
