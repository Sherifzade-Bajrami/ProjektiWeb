<?php
require_once  '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){
    $productId=$_GET['id'];
}
$product = new productController;//instanca per me mundesi thirrjen e metodes delete
$product->delete($productId);

?>