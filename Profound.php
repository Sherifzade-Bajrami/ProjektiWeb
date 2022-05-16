
<?php
require_once('controllers/productController.php');
session_start();
$menuProduct=new ProductController;
$products=$menuProduct->readData();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profound</title>
   <link rel="stylesheet" href="./css/home.css">
    

</head>
<body>    
    <nav class="navbar"> </nav>

    <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
        <a href="./Product.php" class="add-to">Add to Bag</a>
        <a href="#" id="close"><i class="far fa-times"></i></a>
    </div>
        
        <div class="imgbg">
            <input type="text" class="search-input" placeholder="S e a r c h">
            <button class="search-b">Search</button>
        </div>

        <div id="Shop">
            <h1 class="h-shop">Shop now</h1>
            <hr>
            <br>
    
            <div id="shop-p">
               

            <?php foreach($products as $product):?>
            
                        <div id="bag-p">
                    <div id="image-p">
                        <img src="image/<?php echo $product['image'];?>" id="img1" alt="">
                        <button class="bag-b"><a href="./Product.php?id=<?php echo $product['id'];?>" class="add-to">Add to Bag</a></button>
                    </div>
                    <div class="info-p"></div>
                    <h2 id="price1">$<?php echo $product['prices'];?></h2>
                    <p1 class="collection"> <?php echo $product['name'];?></p1> </p1>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        
        <div class="imgbg1">
            <h1 class="sale"><i>S A L E - 50 %</i></h1>
        </div>
        <div class="div2">
            <h1 class="sales">SALES</h1>
            <hr>
            <br>
            
            <div id="sales-p">
                <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s1.webp" id="img3" alt="">
                        <button class="bag-b"><a href="" class="add-to">Add to Bag</a>  </button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$19.99</span>
                      <p1 class="collection-s"> T-Shirt</p1>
                      <br>
                      <span class="actual-price">$39.99</span>
                   </div>
                   <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s2.webp" id="img3" alt="">
                        <button class="bag-b">Add to Bag</button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$17.99</span>
                      <p1 class="collection-s"> Jeans</p1>
                      <br>
                      <span class="actual-price">$35.99</span>
                   </div>
                   <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s3.webp" id="img3" alt="">
                        <button class="bag-b">Add to Bag</button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$12.99</span>
                      <p1 class="collection-s">Shirt</p1>
                      <br>
                      <span class="actual-price">$25.99</span>
                   </div>
                   <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s4.webp" id="img3" alt="">
                        <button class="bag-b">Add to Bag</button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$12.95</span>
                      <p1 class="collection-s">Bodysuit</p1>
                      <br>
                      <span class="actual-price">$25.90</span>
                   </div>
                   <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s5.webp" id="img3" alt="">
                        <button class="bag-b">Add to Bag</button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$34.95</span>
                      <p1 class="collection-s">Boots</p1>
                      <br>
                      <span class="actual-price">$69.90</span>
                   </div>
                   <div id="bag-p">
                    <div id="image-p">
                        <span class="zbritje-p">50% off</span>
                        <img src="./image/s6.webp" id="img3" alt="">
                        <button class="bag-b">Add to Bag</button>
                    </div>
                    <div class="info-p"></div>
                      <span class="price">$149.50</span>
                      <p1 class="collection-s"> Jeans</p1>
                      <br>
                      <span class="actual-price">$299.00</span>
                   </div>
               </div>   
            </div>   
        </div>
       
       <footer></footer>
        
        
        <script src="./js/nav.js"></script>
        <script src="./js//footer.js"></script>

        <script>
    

     
</body>
</html>