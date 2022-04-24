<?php
require_once '../controllers/productController.php';
session_start();
$product = new productController; //instanca e klases
if(isset($_POST['submit'])){// kur behet butoni submit
    $product->insert($_POST);//thirre product dhe insertoje formen me post
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
    height: 600px;
    background-size: cover;
    text-align: center;                  
    font-size: 25px;
    padding-top: 70px;
    padding-left: 500px;
}
.create{
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
    <form class="create" method="POST" enctype = "multipart/form-data">
         Name:
        <input class="input" type="text" name="name">
        <br><br>
        Image path:
        <input type="file" name="image">
        <br><br>
        Price:
        <input type="text" name="price">
        <br><br>
        
        <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
        <br><br>
        <input class="submit" type="submit" name="submit" value="Save">
    </form>
</div>
