

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contactus.css">
</head>
<body>
    
    
    <div id="overlay">
       
        <form onsubmit="event.preventDefault(); validateForm()">
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
    <script>
        var user = "<?php echo( isset($_SESSION["role"])? $_SESSION["role"]: "0"); ?>";
         createNav(user);
    </script>
  
</body>
</html>
