<?php
require_once('../controllers/userController.php');
session_start();

$data= new Useri();



if(isset($_GET['id'])){
    $id=$_GET['id'];
}
    $currentUser=$data->edit('id');


    if(isset($_POST['submit'])){
        $data->update($_POST,$id );
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
.edit{
    overflow: hidden;
     max-width: 300px;
     height:300px;
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
<form  class=" edit" method="post">
    
    Email:
    <input type="text" name="email" value="<?php echo  $currentUser['email'];?>" >
    <br> <br>
    Name:
    <input type="text" name="password" value="<?php echo  $currentUser['password'];?>" >
    <br> <br>
    Role:
    <input type="text" name="role" value="<?php echo  $currentUser['role'];?>" >
    <br> <br>
    <input type="submit" class="submit" name="submit" value="Update" >
 
</form>
</div>