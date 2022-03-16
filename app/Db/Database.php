<?php

namespace App\Db;
USE \PDO;
use PDOException;

class Database {
    const HOST = 'localhost';
    const NAME = 'products';
    const USER = 'root';
    const PASS = '170816';

    private $table;
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }

    public function insert($sku, $name, $price, $size, $weight, $height, $width, $length){
        $query = "INSERT INTO $this->table (sku, name, price, size, weight, height, width, length) 
        VALUES ('$sku', '$name', $price, $size, $weight, $height, $width, $length)";
        return $this->execute($query);
    }

    public function select(){
        $query = "SELECT * FROM $this->table ORDER BY sku";
        return $this->execute($query);
    }

    public function delete($sku){
        $query = "DELETE FROM $this->table WHERE sku = '$sku' LIMIT 1";
        return $this->execute($query);
    }
}