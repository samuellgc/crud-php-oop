<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Product;

$products = Product::getProducts();

$results = '';

foreach($products as $prod){
    if (!$prod['height'] == '') {
        $results .= '<div class="card card-body card-product">
                            <span class="span-checkbox"><input type="checkbox" value="'.$prod['sku'].'" name="'.$prod['sku'].'" class="delete-checkbox"></span>
                            <ul>
                                <li>'.$prod['sku'].'</li>
                                <li>'.$prod['name'].'</li>
                                <li>'.$prod['price'].'$</li>
                                <li>Dimension: '.$prod['height'].' X '.$prod['width'].' X '.$prod['length'].'</li>
                            </ul>
                        </div>';
    }else if (!$prod['size'] == '') {
        $results .= '<div class="card card-body card-product">
                            <span class="span-checkbox"><input type="checkbox" value="'.$prod['sku'].'" name="'.$prod['sku'].'" class="delete-checkbox"></span>
                            <ul>
                                <li>'.$prod['sku'].'</li>
                                <li>'.$prod['name'].'</li>
                                <li>'.$prod['price'].'$</li>
                                <li>Size: '.$prod['size'].' MB</li>
                            </ul>
                        </div>';
    }  else if (!$prod['weight'] == '') {
        $results .= '<div class="card card-body card-product">
                            <span class="span-checkbox"><input type="checkbox" value="'.$prod['sku'].'" name="'.$prod['sku'].'" class="delete-checkbox"></span>
                            <ul>
                                <li>'.$prod['sku'].'</li>
                                <li>'.$prod['name'].'</li>
                                <li>'.$prod['price'].'$</li>
                                <li>Weight: '.$prod['weight'].'</li>
                            </ul>
                        </div>';
    }  
}

$prodSku = filter_input_array(INPUT_POST, FILTER_DEFAULT);

print_r($prodSku);

foreach($prodSku as $sku){
    $string = strval($sku);

    if (isset($string)){
        Product::deleteProduct($string);
    }
}

?>

     
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        window.onload = function() {
            if(!window.location.hash) {
                setTimeout(() => {
                    window.location = window.location + '#loaded';
                    window.location.reload();
                },500)
            }
        }
    </script>
    <title>Product List</title>
</head>
<section class="container">
        <nav class="header-nav">
          <div class="h2-header">
     <h2>Product List</h2>
    </div>
        <div class="btn-header">
            <a href="register.php"><button>ADD</button></a>
            <button id="delete-product-btn" type="submit">MASS DELETE</button>
        </div>
</nav>
<hr>
<form id="del-form" method="POST" action="" name="delProd">
<div class="container" id="cards">
    <?=$resultados?>
</div>
</form>
<hr>
        <footer>
            <div class="footer-div">Scandiweb Test assignment</div>
        </footer>
    </section>

    <script src="assets/js/del-prod.js"></script>
</body>

</html>




