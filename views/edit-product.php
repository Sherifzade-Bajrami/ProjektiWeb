<?php
require_once '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){// e marrim id e row qe e editojme me ane te get
    $productId=$_GET['id'];
}
    $product=new productController;
    $currentProduct= $product->edit('id');


    if(isset($_POST['submit'])){// kur bejme submit thirre metoden update
        $product->update($_POST,$productId );
    }
    
?>
<style>

*{
  font-family: sans-serif; 
  padding:0;
  margin:0;
  
}
.div1{
    background: rgb(184, 152, 139);
    height: 700px;
    background-size: cover;
    text-align: center;                  
    font-size: 25px;
    padding-top: 70px;
    padding-left: 500px;
}
.edit{
    overflow: hidden;
     max-width: 300px;
     background: white;
     padding: 100px;
     border-radius: 20px;
     box-shadow: 0px 15px 20px  rgba(0, 0, 0, 0.1);
     
}

.submit{
    width:90px;
    height:40px;

}



</style>
<div class="div1">

<form  class="edit" method="post" enctype ="multipart/form-data"  >
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
    <input type="submit" class="submit" name="submit" value="Update" >
 
</form>

</div>