<?php

namespace App\Entity;

class Dvd extends Product{
    private $size;

    public function getSize(){
        return $this->size;
    }

    public function setSize($size){
        $this->size = $size;
    }

}