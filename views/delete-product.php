<?php
require_once  '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){
    $menuId=$_GET['id'];
}
$menu = new productController;//instanca per me mundesi thirrjen e metodes delete
$menu->delete($menuId);

?>