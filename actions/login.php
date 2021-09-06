<?php
session_start();
include('../vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UserTable;
use Helpers\HTTP;

$email = $_POST['email'];
$psw = $_POST['password'];

$table = new UserTable(new MySQL());
$users = $table->login($email);

if($users){
    foreach($users as $user){
        if(password_verify($psw,$user->password)){
            $_SESSION['user'] = $user;
            if($_SESSION['checkout']){
                header('location: order.php');
            }
            else{
                HTTP::redirect("/home.php");
            }
        }
        else{
            HTTP::redirect("/signin.php","login=failed");
        }
    }
}
else{
    HTTP::redirect("/signin.php","login=failed");
}