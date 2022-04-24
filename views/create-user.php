<?php
require_once('../controllers/userController.php');
session_start();

$data= new Useri();
if(isset($_POST['submit'])){// kur behet butoni submit
    $data->insertoDhenat($_POST);
    return header("Location: userDashboard.php");//thirre menu dhe insertoje formen me post
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
    
    <form  class="create" method="POST">
        Email:
        <input type="text" name="email">
        <br><br>
        Password:
        <input type="text" name="password">
        <br><br>
        Confirm Password:
        <input type="text" name="password">
        <br><br>
        Role:
        <input type="text" name="role">
        <br><br>
        <input type="submit" class="submit" name="submit" value="Save">
    </form>
</div>
