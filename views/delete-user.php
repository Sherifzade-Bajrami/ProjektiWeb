<?php
require_once('../controllers/userController.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
}
$user = new Useri;//instanca per me mundesi thirrjen e metodes delete
$user->deleteDhenat($id);

?>