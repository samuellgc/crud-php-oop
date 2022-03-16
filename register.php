<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Product List</title>
</head>
<section class="container">
        <nav class="header-nav">
            <div class="h2-header">
                <h2>Product Add</h2>
            </div>
            <div class="btn-header">
                <button type="submit" id="save-prod">Save</button>
                <a href="index.php"><button class="btn-cancel">Cancel</button></a>
            </div>
        </nav>
        <hr>
        <div class="container">
            <form id="product_form" method="POST" action="">
                <p>SKU <input class="input-form-head" name="sku" type="text" id="sku" required></p>
                <p>Name <input class="input-form-head" type="text" name="name" id="name" required></p>
                <p>Price ($) <input class="input-form-head" type="number" name="price" id="price" required></p>
                <p class="typeSwitcher">Type Switcher
                    <select id="productType" onchange="openCards()">
                        <option value="none" selected>Type Switcher</option>
                        <option value="dvd">DVD</option>
                        <option value="book">Book</option>
                        <option value="furniture">Furniture</option>
                    </select>
                </p>
                <div id="switcherCard">
                </div>
            </form>
        </div>
        <hr>
        <footer>
            <div class="footer-div">Scandiweb Test assignment</div>
        </footer>
    </section>

    <script src="assets/js/add-prod.js"></script>
    <script src="assets/js/change-cards.js"></script>
    </body>

</html>