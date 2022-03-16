<?php

namespace App\Entity;

class Book extends Product {
    private $weight;

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }
   
}