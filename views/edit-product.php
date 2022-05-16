<?php
require_once '../controllers/productController.php';
session_start();
if(isset($_GET['id'])){// e marrim id e row qe e editojme me ane te get
    $productId=$_GET['id'];
}
    $product=new productController;
    $currentProduct= $product->edit( $productId);


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
    height: 2000px;
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
    <img src="../image/<?php echo $currentProduct["image"]?>" width="300px">
    <br>
    <input type="text" name="image" value="<?php echo  $currentProduct['image'];?>" >
    <br>
     Name:
    <input type="text" name="name" value="<?php echo  $currentProduct['name'];?>" >
    <br>
    Price:
    <input type="text" name="prices" value="<?php echo  $currentProduct['prices'];?>" >
    <br>
       Gallery one:
                
        <img src="../image/<?php echo $currentProduct['galleryone'];?>" alt=""width="300px" height="250px"> 
         <input type="text" name="galleryone" value="<?php echo  $currentProduct['galleryone'];?>" >
        <br>
        Gallery two:
        <img src="../image/<?php echo $currentProduct['gallerytwo'];?>" alt=""width="300px" height="250px"> 
        <input type="text" name="gallerytwo" value="<?php echo  $currentProduct['gallerytwo'];?>" >
        <br>
        Gallery three:
        <img src="../image/<?php echo $currentProduct['gallerythree'];?>" alt=""width="300px" height="250px"> 
        <input type="text" name="gallerythree" value="<?php echo  $currentProduct['gallerythree'];?>" >
    <br>
    Description:
    <input type="text" name="description" value="<?php echo  $currentProduct['description'];?>" >
    <br>
    Details:
    <input type="text" name="details" value="<?php echo  $currentProduct['details'];?>" >

    <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
    <br>
    <input type="submit" class="submit" name="submit" value="Update" >
 
</form>

</div>