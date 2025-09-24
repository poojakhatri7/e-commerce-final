
<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $mobile =  $_POST["mobile"];
    $email =  $_POST["email"]; 
     $address =  $_POST["address"]; 
    $password =  $_POST["password"];
    // $confirmpassword =  $_POST["confirmpassword"];
//     $duplicate = mysqli_query($conn, "SELECT * FROM `users` WHERE mobile = '$mobile'");
//     if (mysqli_num_rows($duplicate)>0)
//     {
//     echo "<script> alert('Already registerted with this Mobile number ') </script>";
// }
// else 
// {
//  $query = "INSERT INTO users values ('','$name','$mobile','$email','$address',
//     '$password','')";
//     mysqli_query($conn,$query);
//  echo"<script> alert('registration successful you can login now') </script>"; 
//  echo "<script> window.location.href = 'login_page'; </script>";
// }
// Check for duplicate mobile or email
$duplicate = mysqli_query($conn, "SELECT * FROM `users` WHERE mobile = '$mobile' OR email = '$email'");

if (mysqli_num_rows($duplicate) > 0) {
    $row = mysqli_fetch_assoc($duplicate);
    
    if ($row['mobile'] == $mobile) {
        echo "<script>alert('Already registered with this Mobile number'); window.location.href = 'register-page';</script>";
    } elseif ($row['email'] == $email) {
        echo "<script>alert('Already registered with this Email ID'); window.location.href = 'register-page';</script>";
    }
} else {
  
$query = "INSERT INTO users ( name , mobile , email , address , password) VALUES ('$name','$mobile','$email','$address','$password')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful! You can login now.'); window.location.href = 'login-page';</script>";
    } else {
        echo "<script>alert('Error occurred while registering.'); window.location.href = 'register-page';</script>";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 10:06:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<meta name="robots" content="noindex, follow">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                              <div class="form-group">
                                <label for="name"><i class="fas fa-mobile"></i></label>
                                <input type="number" name="mobile" id="mobile" placeholder="Your Mobile"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                               <div class="form-group">
                                <label for="name"><i class="fa fa-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Your address"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            
                            <!-- <div class="form-group">
                                <label for="re-pass"><i class="fa fa-key"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> -->
                            
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login-page" class="signup-image-link">Already have a account</a>
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