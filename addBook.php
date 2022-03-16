<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Book;

$obBook = new Book();

$obBook->setSku($_POST['skuBook']);
$obBook->setName($_POST['nameBook']);
$obBook->setPrice($_POST['priceBook']);
$obBook->setWeight($_POST['weight']);

$obBook->setProduct($obBook->getSku(), $obBook->getName(), $obBook->getPrice(), 'null' ,$obBook->getWeight(), 'null', 'null', 'null');

