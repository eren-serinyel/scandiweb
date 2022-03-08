<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="../templates/assets/css/main.css">
</head>
<body>

<header>
    <div id="title"><h1>Product List</h1></div>
    <nav class="buttons">
        <a href="/add-product" id="add-product-btn" class="btn-primary">ADD</a>
        <a id="delete-product-btn" class="btn-secondary">MASS DELETE</a>
    </nav>
</header>
<hr>

<main>
    <form action="/" id="form-product" method="post">
        <div class="box-row">
            <?php foreach ($products as $product): ?>
                <div class="box-item">
                    <div class="box-item-wrapper">
                        <label>
                            <input type="checkbox" name="<?php echo $product['id'] ?>"
                                   value="<?php echo $product['id'] ?>" class="delete-checkbox">
                        </label>
                        <p><?php echo $product['sku'] ?></p>
                        <p><?php echo $product['name'] ?></p>
                        <p><?php echo $product['price'] . ' $' ?></p>
                        <p><?php echo $product['attr'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </form>
</main>
<hr>

<footer>
    <h3>Scandiweb Test Assignment</h3>
</footer>

<script src="../templates/assets/js/jquery.min.js"></script>
<script src="../templates/assets/js/delete.js"></script>
</body>
</html>
