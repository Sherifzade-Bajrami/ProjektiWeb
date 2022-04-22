<?php
require_once('../controllers/userController.php');
session_start();

$data= new Useri();
if(isset($_POST['submit'])){// kur behet butoni submit
    $data->insertoDhenat($_POST);
    return header("Location: userDashboard.php");//thirre menu dhe insertoje formen me post
}

?>
<div>
    
    <form method="POST">
        Email:
        <input type="text" name="email">
        <br>
        Password:
        <input type="text" name="password">
        <br>
        Confirm Password:
        <input type="text" name="password">
        <br>
        Role:
        <input type="text" name="role">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>
