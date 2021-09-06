<?php

namespace Libs\Database;

use PDOException;

class ProductTable{
    public function __construct(MySQL $db){
        $this->db = $db->connect();
    }

    public function brand(){
        try{
            $statement = $this->db->prepare("SELECT DISTINCT(brand) FROM products");
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function color(){
        try{
            $statement = $this->db->prepare("SELECT DISTINCT(color) FROM products");
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function size(){
        try{
            $statement = $this->db->prepare("SELECT DISTINCT(size) FROM products");
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function order($data){
        try{
            $query = "INSERT INTO orders (date,deliveryStatus,userID) 
            VALUES (NOW(),'ordered',:userid)";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function orderline($data){
        try{
            $query = "INSERT INTO orderline (productID,orderID,quantity,amount,total)
            VALUES (:productid,:orderid,:quantity,:amount,:total)";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $statement->rowCount();

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
   
}