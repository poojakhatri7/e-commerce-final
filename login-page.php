<?php
session_start();
include './db_connection.php';
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // 1. Check admin table
    $admin_result = mysqli_query($conn, "SELECT * FROM `admin_login_details` WHERE email = '$email'");
    if (mysqli_num_rows($admin_result) > 0) {
        $admin = mysqli_fetch_assoc($admin_result);
        if ($password == $admin["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $admin["id"];
            $_SESSION["name"] = $admin["name"];
            $_SESSION["mobile"] = $admin["mobile"];
            $_SESSION["email"] = $admin["email"];
            $_SESSION["address"] = $admin["address"];
            $_SESSION["gst_number"] = $admin["gst_number"];
            $_SESSION["user_role"] = (int)$admin["role"];

            echo "<script> window.location.href = 'admin2'; </script>";
            exit();
        } else {
            echo "<script> alert('Wrong password');  window.location.href = 'login-page'; </script>";
            exit();
        }
    }

 // 2. Check user table
    $user_result = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'");
    if (mysqli_num_rows($user_result) > 0) {
        $user = mysqli_fetch_assoc($user_result);
        if ($password == $user["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $user["id"];
            $_SESSION["name"] = $user["name"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["mobile"] = $user["mobile"];
            $_SESSION["address"] = $user["address"];

            echo "<script> window.location.href = 'public'; </script>";
            exit();
        } else {
            echo "<script> alert('Wrong password for user');  window.location.href = '../login_page'; </script>";
            exit();
        }
    }

    // Not found in either
    echo "<script> alert('User not registered');  window.location.href = 'login_page'; </script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 10:06:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<meta name="robots" content="noindex, follow">
</head>
<body>

<div class="main">


 <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                       <div class="link-wrapper">
  <a href="index" class="signup-image-link">Home</a>
  <a href="register-page" class="signup-image-link">Create an account</a>
</div>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title"> Login Details</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="fa fa-user"></i></label>
                                <input type="email" name="email" id="your_name" placeholder="Enter your email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Enter your Password" required/>
                            </div>
                         
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>


        </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 10:06:02 GMT -->
</html>