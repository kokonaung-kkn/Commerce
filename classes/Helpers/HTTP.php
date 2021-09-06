<?php

namespace Helpers;

class HTTP{
    static $base = "http://localhost/commerce/php";

    static function redirect($path, $query=0){
        $url = static::$base.$path;

        if($query){
            $url .= "?$query";
        }
        header("location: $url");
        exit();
    }
}