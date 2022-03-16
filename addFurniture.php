<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Furniture;

$obFurniture = new Furniture();

$obFurniture->setSku($_POST['skuFurniture']);
$obFurniture->setName($_POST['nameFurniture']);
$obFurniture->setPrice($_POST['priceFurniture']);
$obFurniture->setHeight($_POST['height']);
$obFurniture->setWidth($_POST['width']);
$obFurniture->setLength($_POST['length']);

$obFurniture->setProduct($obFurniture->getSku(), $obFurniture->getName(), $obFurniture->getPrice(), 'null' ,'null', $obFurniture->getHeight(), $obFurniture->getWidth(), $obFurniture->getLength());

