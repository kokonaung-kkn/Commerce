<?php

namespace Libs\Database;

use PDO;
use PDOException;

class UserTable{
    public function __construct(MySQL $db){
        $this->db = $db->connect();
    }

    public function register(Array $data){
        try{
            if(isset($data)){
                $query = "INSERT INTO users (firstName,lastName,email,password,gender,roll_id)
                    VALUES (:fname,:lname,:email,:password,:gender,:roll_id)";
                $statement = $this->db->prepare($query);
                $statement->execute($data);

                return $this->db->lastInsertId();
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function login($email){
        try{
            $query = "SELECT * FROM users WHERE email='$email'";
            $statement = $this->db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}