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
   
    height: 1000px;
    background-size: cover;
    text-align: center;                  
    font-size: 25px;
    padding-top: 70px;
    padding-left: 500px;
}
.create{
    overflow: hidden;
     max-width: 400px;
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
        <input type="text" name="image">
        <br><br>
        Price:
        <input type="text" name="prices">
        <br><br>
        Gallery one:
        <input type="text" name="galleryone">
        <br><br>
        Gallery two:
        <input type="text" name="gallerytwo">
        <br><br>
        Gallery three:
        <input type="text" name="gallerythree">
        <br><br>
        Details:
        <input type="text" name="details">
        <br><br>
        Description:
        <textarea name="description" cols="30" rows="10"></textarea>

        <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
        <br><br>
        <input class="submit" type="submit" name="submit" value="Save">
    </form>
</div>
