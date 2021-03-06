<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Bag</title>
    <link rel="stylesheet" href="./css/shoppingbag.css">
</head>
<body>
    <nav class="navbar"></nav>
    <div class="shop-bag">
        <h1 class="shopping-bag">Shopping Bag</h1>
        <hr>
        <div class="table-div">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class="subtotal">Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="info-bag">
                            <img src="./image/m2.webp">
                            <div>
                                <p>High collar puffer jacket</p>
                                <small>Price:$42.99</small>
                                <br>
                                <a href="" class="remove">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$42.95</td>
                </tr>
                <tr>
                    <td>
                        <div class="info-bag">
                            <img src="./image/a3.webp">
                            <div>
                                <p>High collar puffer jacket</p>
                                <small>Price:$25.95</small>
                                <br>
                                <a href="" class="remove">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td>$25.95</td>
                </tr>
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td class="total">Total</td>
                        <td>$68.90</td>
                    </tr>
                </table>
            </div>
        </div>
       
    </div>
    <script src="./js/nav.js"></script>
    
</body>
</html>