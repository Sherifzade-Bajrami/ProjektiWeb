<?php
require_once('controllers/productController.php');
session_start();
if(isset($_GET['id'])){
    $Id=$_GET['id'];
}
$menuProduct=new ProductController;
$product= $menuProduct->edit(':Id');
$sliderProducts = $menuProduct->slider();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/productt.css">
</head>
<body>

    <nav class="navbar"></nav>


    <section class="product-details">
        
        <div class="image-slider" style="background-image: url('data:image;base64,<?php echo $product["image"]?>');">
            <div class="product-image">
                <img src='data:image;base64,<?php echo $product["image"]?>' class="active" alt="">
                <img src="<?php echo $product["galleryone"]?>" alt="">
                <img src="<?php echo $product["gallerytwo"]?>" alt="">
                <img src="<?php echo $product["gallerythree"]?>" alt="">

            </div>
        </div>
        </div>
        <div class="details">
            <h2 class="product-brand"><?php echo $product["name"]?></h2>
            <p class="product-imagee"><?php echo $product["image"]?></p>
            <span class="product-price"><?php echo $product["prices"]?></span>
            


            <p class="product-sub-heading">Select size</p>

            <input type="radio" name="size" value="s" checked hidden id="s-size">
            <label for="s-size" class="size-radio-btn check">s</label>

            <input type="radio" name="size" value="m" checked hidden id="m-size">
            <label for="m-size" class="size-radio-btn ">m</label>

            <input type="radio" name="size" value="l" checked hidden id="l-size">
            <label for="l-size" class="size-radio-btn ">l</label>
            <input type="radio" name="size" value="xl" checked hidden id="xl-size">
            <label for="xl-size" class="size-radio-btn ">l</label>

            <button class="btn card-btn">Add To Cart</button>
            
        </div>

    </section>

    <section class="details-des">
        <h2 class="heading"> Pershkrimi</h2>
        <p class="des"><?php echo $product["description"]?></p>
    </section>     
          <footer></footer>

<script src="./js/nav.js"></script>
<script src="./js/productt.js"></script>
<script src="./js/footer.js"></script>
    
  
    
</body>
</html>