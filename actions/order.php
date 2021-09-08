<?php

include('../vendor/autoload.php');

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\ProductTable;

$user = Auth::check();
$table = new ProductTable(new MySQL());
$order = ['userid'=>$user->id];
$orderID = $table->order($order);

foreach($_SESSION as $product){
    if($product !== $user && $product !== $_SESSION['checkout']){
        $orderline = [
            'productid' => $product[4],
            'orderid' => $orderID,
            'quantity' => $product[3],
            'amount' => $product[2],
            'total' => $product[2] * $product[3],
        ];
        $row = $table->orderline($orderline);
    }
    else{
        continue;
    }
}
if(isset($row)){
    HTTP::redirect('/shipping.php');
}else{
    HTTP::redirect('/men.php');
}