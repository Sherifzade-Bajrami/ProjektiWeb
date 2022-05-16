<?php

require_once('controllers/userController.php');
session_start();
session_destroy();
session_start();
$dhenat= new Useri();

$error = ""; $error1 = ""; $error2 = ""; $error3 = "";

if (isset($_POST['name'])){
    $error1 = "Please enter the name!";
}
if (isset($_POST['email'])){
    $error2 = "Please enter the email!";
}
if (isset($_POST['message'])){
    $error3 = "Please enter the message!";
}

if ( isset($_POST['name']) && filter_var($_POST['name'], FILTER_VALIDATE_NAME) === false){
    $error1 = "Please enter the name!";
}

if($error1 != "" || $error2 != "" || $error3 != ""){
    $error = "There were error(s) in your form!";
} 
else{
    $email ="ervinosmani3@gmail.com";
    $message = (isset($_POST['message']));
    $headers = "From: ".(isset($_POST['email']));
    if ($email){
        $successMessage = "Congrats! Message was sent successfully!";
    } 
    else{
        $error = "Message was not sent, Try again Later!";
    }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contactus.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    
    
    <div id="overlay">
    <nav class="navbar"> </nav>
       
        <form  onsubmit="event.preventDefault(); validateForm()">
            <h1>Contact Us</h1>
           

            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Your name">
            <small class="error"></small>


            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Your email">
            <small class="error"></small>

            <label for="message">Message</label>
            <textarea id="message" placeholder="Your message" rows="6"></textarea>
            <small class="error"></small>

            <div class="center">
                <input type="submit" value="Send Message">
                <p id="success"></p>
            </div>
        </form>

        
    </div>



    <script src=".js/contactus.js"></script>
    <script src="./js/nav.js"></script>
    <script>
        var user = "<?php echo( isset($_SESSION["role"])? $_SESSION["role"]: "0"); ?>";
         createNav(user);
    </script>
  
</body>
</html>


