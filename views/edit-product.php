<?php
require_once '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){// e marrim id e row qe e editojme me ane te get
    $productId=$_GET['id'];
}
    $product=new productController;
    $currentProduct= $product->edit($productId);


    if(isset($_POST['submit'])){// kur bejme submit thirre metoden update
        $product->update($_POST,$productId );
    }
    
?>

<form method="post" enctype ="multipart/form-data"  >
    Image: <br>
    <!-- type file dergimi i imazhit ne databaze dhe kthimi i imazht nga databaza-->
    <img src='data:image;base64,<?php echo $currentProduct["image"]?>' width="300px">
    <br>
    <input type="file" name="image" >
    <br>
     Name:
    <input type="text" name="name" value="<?php echo  $currentProduct['name'];?>" >
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currentProduct['price'];?>" >
    <br>
    <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
    <br>
    <input type="submit" name="submit" value="Update" >
 
</form>