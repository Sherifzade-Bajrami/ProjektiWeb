<?php
require_once('controllers/productController.php');
session_start();
$menuProduct=new productController;
$products=$menuProduct->readData();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profound - clothing</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">



</head>
<body>
<nav class="navbar"></nav>

        <div id="Shop">
            <h1 class="h-shop">Shop now</h1>
            <hr>
            <br>
    
            <div id="shop-p">
               
                <div id="bag-p">
                   <?php foreach($products as $product):?>
                    <div id="image-p">
                      <a href="Product.php?id=<?php echo $product['id'];?>">
                        <img src='data:image;base64,<?php echo $product["image"]?>' id="img1" alt="">
                        <button class="bag-b"><a href="./Product.php" class="add-to">Add to Bag</a></button>
                    </div>
                    <div class="info-p"></div>
                    <h2 id="price1"><?php echo $product['price'];?>$25.95</h2>
                    <p1 class="collection"><?php echo $product['details'];?></p></p1> </p1>
                </div>
                <?php endforeach;?>

            </div>
        </div>

<footer></footer>

<script src="js.nav.js">
    
</body>
</html>