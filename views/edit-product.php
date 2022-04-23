<?php
require_once '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){// e marrim id e row qe e editojme me ane te get
    $menuId=$_GET['id'];
}
    $menu=new productController;
    $currentMenu= $menu->edit($menuId);//i merr te dhenat nga id


    if(isset($_POST['submit'])){// kur bejme submit thirre metoden update
        $menu->update($_POST,$menuId );
    }
    
?>

<form method="post" enctype ="multipart/form-data"  >
    Image: <br>
    <!-- type file dergimi i imazhit ne databaze dhe kthimi i imazht nga databaza-->
    <img src='data:image;base64,<?php echo $currentMenu["image"]?>' width="300px">
    <input type="file" name="image" >
    <br>
     Name:
    <input type="text" name="name" value="<?php echo  $currentMenu['name'];?>" >
    <br>
    Price:
    <input type="text" name="price" value="<?php echo  $currentMenu['price'];?>" >
    <br>
    <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
    <br>
    <input type="submit" name="submit" value="Update" >
 
</form>