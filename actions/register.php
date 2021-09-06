<?php

include('../vendor/autoload.php');

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UserTable;

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$email = $_POST['email'];
$psw = $_POST['password'];
$gender = $_POST['gender'];

$data = [
    "fname" => $fn,
    "lname" => $ln,
    "email" => $email,
    "password" => password_hash($psw,PASSWORD_BCRYPT),
    "gender" => $gender,
    "roll_id" => 0,
];

$table = new UserTable(new MySQL());
if($table){
    $table->register($data);
    HTTP::redirect("/signin.php");
}
else{
    HTTP::redirect("/signup.php");
}