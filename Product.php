<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Product - </title>

    <link  rel="stylesheet" href="./css/home.css">
    <link  rel="stylesheet" href="./css/productt.css">
    

</head>
<body>

    <nav class="navbar"></nav>
    
    <section class="product-details">
        <div class="image-slider">
            <div class="product-image"> 
                <img src="./image/add1.jpg" class="active" alt="">
                <img src="./image/add2.jpg" alt="">
                <img src="./image/add3.jpg" alt="">
                <img src="./image/add4.jpg" alt="">
            </div>
        </div>
        <br>
    
        <div class="details">
            <br>
            <h2 class="product-brand">PRINTED LINEN BLEND TOP </h2>
            <br>
            <p class="product-short-des">Top made of linen blend fabric. 
                <br>Tied V-neckline and long sleeves with ruffled elastic cuffs.
                <br> Elastic smocked fabric.</p>
                <span class="product-price">$25.95</span>

                <p class="product-sub-heading">select size</p>

                <input type="radio" name="size" value="s" checked hidden id="s-size">
                <label for="s-size" class="size-radio-btn check" >s</label>
                <input type="radio" name="size" value="m" hidden id="m-size">
                <label for="m-size" class="size-radio-btn">m</label>
                <input type="radio" name="size" value="l" hidden id="l-size">
                <label for="l-size" class="size-radio-btn">l</label>
                <input type="radio" name="size" value="xl" hidden id="xl-size">
                <label for="xl-size" class="size-radio-btn">xl</label>
               
                
                <button class="btn card-btn">Add to Bag</button>

        </div>
    </section>
    
    <section class="details-des">
        <h2 class="heading">Materials</h2>
        <p class="des">
            We work with monitoring programs to guarantee compliance with the health, safety, and quality standards for our products. 
            The Green to Wear 2.0 standard aims to minimize the environmental impact of textile manufacturing. To do this, we have developed Inditex’s The List program which helps us guarantee both the purity of production processes and the health and safety of our garments. 
            OUTER SHELL
            55% linen · 45% viscose
            </p>
    </section>
    <br>
  

 
    <footer></footer>

    <script src="./js/nav.js"></script>
    <script src="./js/productt.js"></script>
    <script src="./js/footer.js"></script>
    
</body>
</html>