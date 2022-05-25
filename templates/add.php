<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Add</title>
    <link rel="stylesheet" href="../templates/assets/css/main.css">
</head>
<body>

<header>
    <div id="title"><h1>Product Add</h1></div>
    <nav class="buttons">
        <a id="add-product-btn" class="btn-primary">Save</button></a>
        <a href="/" class="btn-secondary">Cancel</a>
    </nav>
</header>
<hr>

<main>
    <div class="container">
        <form action="/add-product" id="product_form" method="post" autocomplete="off">
            <div class="row">
                <div class="col-25">
                    <label>SKU</label>
                </div>
                <div class="col-75">
                    <input type="text" id="sku" name="sku" class="productClass" placeholder="SKU" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="name" name="name" class="productClass" placeholder="Name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Price ($)</label>
                </div>
                <div class="col-75">
                    <input type="number" id="price" name="price" class="productClass" placeholder="Price $" required>
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="type-switcher">Type Switcher</label>
                </div>
                <div class="col-75">
                    <select id="productType" name="productType">
                        <option value="" selected disabled hidden></option>
                        <option value="DVD">DVD</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Book">Book</option>
                    </select>
                </div>
            </div>
            <div id="attribute"></div>
        </form>
    </div>
</main>
<hr>

<footer>
    <h3>Scandiweb Test Assignment</h3>
</footer>

<script src="../templates/assets/js/jquery.min.js"></script>
<script src="../templates/assets/js/jquery.validate.min.js"></script>
<script src="../templates/assets/js/add.js"></script>
</body>
</html>
