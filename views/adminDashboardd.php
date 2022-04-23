<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello in AdminDashbord <?php echo $_SESSION["name"] ?></title>
</head>
<body>
   
<div>
        <h1>Dashboard Admin </h1>
        <a href="productDashboard.php">
        <button >
       productDashboard
        </button></a>  
        <a href="userDashboard.php"> 
        <button >
          UserDashboard 
        </button></a> 
    </div>
</body>
</html>