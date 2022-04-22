<?php
require_once('../controllers/userController.php');
session_start();

$data= new Useri();
$msg ="Hello User :". $_SESSION["name"];


if(isset($_GET['id'])){
    $id=$_GET['id'];
}
    $currentUser= $data->edit($id);


    if(isset($_POST['submit'])){
        $data->update($_POST,$id );
    }
    
?>

<form method="post">
    
    Email:
    <input type="text" name="email" value="<?php echo  $currentUser['email'];?>" >
    <br>
    Name:
    <input type="text" name="password" value="<?php echo  $currentUser['password'];?>" >
    <br>
    Role:
    <input type="text" name="role" value="<?php echo  $currentUser['role'];?>" >
    <br>
    <input type="submit" name="submit" value="Update" >
 
</form>