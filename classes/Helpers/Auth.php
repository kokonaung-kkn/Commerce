<?php

namespace Helpers;

class Auth{
    static $url = "/signin.php";

    public static function check(){
        session_start();
        if(isset($_SESSION['user'])){
            return $_SESSION['user'];
        }
        else{
            HTTP::redirect(static::$url);
        }
    }
}