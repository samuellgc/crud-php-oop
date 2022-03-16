<?php

namespace App\Entity;

use App\Db\Database;

abstract class Product {

    private $sku;
    private $name;
    private $price;

    public function getSku(){
        return $this->sku;
    }

    public function setSku($sku){
        $this->sku = $sku;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setProduct($sku, $name, $price, $size, $weight, $height, $width, $length){
        $obDatabase = new Database('product');
        $obDatabase->insert($sku, $name, $price, $size, $weight, $height, $width, $length);
    }

    public static function getProducts() {
        return (new Database('product'))->select();
    }

    public static function deleteProduct($sku){
        return (new Database('product'))->delete($sku);
    }
    
}