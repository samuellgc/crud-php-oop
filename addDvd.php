<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Dvd;

$obDvd = new Dvd();

$obDvd->setSku($_POST['skuDvd']);
$obDvd->setName($_POST['nameDvd']);
$obDvd->setPrice($_POST['priceDvd']);
$obDvd->setSize($_POST['size']);

$obDvd->setProduct($obDvd->getSku(), $obDvd->getName(), $obDvd->getPrice(), $obDvd->getSize(),'null', 'null', 'null', 'null');
