<?php

require_once('./controllers/userController.php');
session_start();
session_destroy();
session_start();
$dhenat= new Useri();

//////////////Login
if(isset($_POST['submit'])){
    $u_email = $_POST["email"];
    $password = $_POST["password"];
    $userdata =$dhenat->lexoUserin($u_email);
    if(empty($u_email)){
      header("Location: login.php?error=User Email is required");
      exit();
    }else if(empty($password)){
      header("Location: login.php?error=User Password is required");
    exit();
    }
    else{
    if($userdata != null) {
         if (password_verify($password, $userdata["password"])) {
          
                $_SESSION["email"] = $userdata["email"];
                $_SESSION["role"] = $userdata["role"];
                $_SESSION["id"] = $userdata["id"];
               
                header("Location: index.php?login=Success");
            }else{
              echo "pw gabim";
            }
        }
        else {
          header("Location: login.php?error=Sorry, those credentials do not match");
      }
    }
    }
    
    ////////// Sing Up
    if(isset($_POST['regjistrohu'])){
      $email = $_POST["s_email"];
      $u_p =  password_hash($_POST['s_password'], PASSWORD_BCRYPT);
      $dhenat->insert($email,$u_p,$u_n);
          // if (password_verify($u_p, $userdata["password"])) {
            if (!empty($email)) {
             
                  $_SESSION["email"] = $email;
                  $_SESSION["role"] = "1";
               
                
              }else{
                header("Location: login.php?error=Sorry, those credentials do not match");
              }
         
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>

        *{
            padding: 0;
            margin: 0;
        }

        .div3{
            width: 1520px;
            height: calc(100vh - 0px);
            background-image: url('./image/loginbg.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
   
        }
       .Login{
             overflow: hidden;
             max-width: 390px;
             background: rgba(0, 0, 0, 0.3);
             padding: 100px;
             border-radius: 20px;
             box-shadow: 0px 15px 20px  rgba(0, 0, 0, 0.1);
            }
        .Login .title-text{
             display: flex;
              width: 200%; 
            }
        .Login .title-text .title{
             width: 50%;
             font-size: 35px;
              font-weight: 600;
             text-align: center;
             transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
             color: rgb(146, 109, 96);
            }
        .Login .form-c{
             width: 100%;
             overflow: hidden;
            }       
        .form-c .slide-controls{
              position: relative;
             display: flex;
             height: 50px;
             width: 385px;
             margin: 30px 0 10 0;
             overflow: hidden;
             justify-content: space-between;
             border: 1px solid lightgrey;
             border-radius: 7px;
            }
        .slide-controls .slide{
             height: 100%;
             width: 100%;
             z-index: 1;
             color: #fff;
             font-size: 18px;
             font-weight: 500;
             text-align: center;
             line-height: 48px;
             cursor: pointer;
             transition: all 0.6 ease;
            }
        .slide-controls .register{
          color: #000;

        }
        .slide-controls .slide-tab{
            position: absolute;
           height: 100%;
           width: 50%;
           left: 0;
           z-index: 0;
           border-radius: 5px;
           transition: all 0.6s cubic-bezier(0.68,-0.55,0.265.1.15);
            background: -webkit-linear-gradient(left, #b8a196, #b89b89);
        }
        input[type="radio"]{
            display: none;
   
        }
        #register:checked ~ .slide-tab{
           left: 50%;
        }
        #register:checked ~ .register{
            color: #fff;
        }
        #register:checked ~ .login{
             color: #000;
        }
        .form-c .form-i{
          display: flex;
         width: 200%;
        }
        .form-c .form-i form{
              width: 50%;
             transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        .form-i form .field{
            height: 50px;
            width: 100%;
            margin-top: 20px;

        }
        .form-i form .field input{
            height: 100%;
            width: 373px;
            outline: none;
            padding-left: 15px;
            font-size: 17px;
            border-radius: 5px;
            border:  1px solid lightgrey;
            border-bottom-width: 2px;  
            transition: all 0.4s ease;
            background-color: #f3efec; 
        }
        .form-i form .field input:focus{
             border-color:rgb(204, 152, 134);
        }
        .form-i form .pass-link{
             margin-top: 5px;
        }
        .form-i form .pass-link a,
        .form-i form .register-link a{
            color:rgb(204, 152, 134);
            text-decoration: none;
        }
       .form-i form .register-link{
             text-align: center;
             margin-top: 30px;
        }
        .form-i form .pass-link a:hover,
        .form-i form .register-link a:hover{
            text-decoration: underline;
        }
        form .field input[type="submit"]{
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            border: none;
            cursor: pointer;
            background: -webkit-linear-gradient(left, #b8a196, #b89b89);
             width: 390px;
        }
    </style>
</head>
<body>
    
    <div class="div3">
        <div class="Login">
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title register">Register</div>
            </div>
            <br><br>
            <div class="form-c">
                <div class="slide-controls">
                    <input type="radio" name="slider" id="login" checked>
                    <input type="radio" name="slider" id="register">
                    <label for="login" class="slide login">Login</label>
                    <label for="register" class="slide register">Register</label>
                    <div class="slide-tab"></div>
                </div>
                <div class="form-i">
                    <form action="#" class="login">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required id="email">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required id="password">
                        </div>
                        <div class="pass-link"><a href="#">Forgot password</a></div>
                        <div class="field">
                            <input type="submit"  onclick="regex()" value="Login" >
                        </div>
                        <div class="register-link">Not a member?<a href="#">Register now</a></div>
                    </form>
                    <form action="#" class="register">
                        <div class="field">
                            <input type="text" placeholder="Email Address" required id="email">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required id="password">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm Password" required  id="password">
                        </div>
                        <div class="field">
                            <input type="submit" onclick="regex()" value="Register" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/login.js"> </script>
    <script>
        var user = "<?php echo( isset($_SESSION["role"])? $_SESSION["role"]: "0"); ?>";
         createNav(user);
    </script>
    
    
</body>
</html>