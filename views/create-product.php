<?php
require_once '../controllers/productController.php';
session_start();
$menu = new productController; //instanca e klases
if(isset($_POST['submit'])){// kur behet butoni submit
    $menu->insert($_POST);//thirre menu dhe insertoje formen me post
}

?>
<div>
    <form method="POST" enctype = "multipart/form-data">
         Name:
        <input type="text" name="name">
        <br>
        Image path:
        <input type="file" name="image">
        <br>
        Price:
        <input type="text" name="price">
        <br>
        Description:
        <input hidden type="text" name="added_by" value="<?php echo $_SESSION['name'];?>" >
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
