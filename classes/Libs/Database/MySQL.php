<?php

namespace Libs\Database;

use PDO;
use PDOException;

class MySQL{
    public function __construct(
        private $host = "localhost",
        private $dbname = "id17549914_commerce",
        private $username = "id17549914_kkn",
        private $password = "!8(eA0m4!x(+$(XR",
        private $db = null
    ){}

    public function connect(){
        try{
            $this->db = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                ]
            );
            return $this->db;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}