<?php include '../db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       

        <!-- WEBPAGE TITLE -->
        <title>Contact</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/demo-logo-2.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/contact.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>
        
        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <?php include 'header.php'; ?>
        
        <!--<aside class="category-sidebar">-->
        <!--    <div class="category-header">-->
        <!--        <h4 class="category-title">-->
        <!--            <i class="fas fa-align-left"></i>-->
        <!--            <span>categories</span>-->
        <!--        </h4>-->
        <!--        <button class="category-close"><i class="icofont-close"></i></button>-->
        <!--    </div>-->
        <!--    <ul class="category-list">-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-vegetable"></i>-->
        <!--                <span>vegetables</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">asparagus</a></li>-->
        <!--                <li><a href="#">broccoli</a></li>-->
        <!--                <li><a href="#">carrot</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-groceries"></i>-->
        <!--                <span>groceries</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Grains & Bread</a></li>-->
        <!--                <li><a href="#">Dairy & Eggs</a></li>-->
        <!--                <li><a href="#">Oil & Fat</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-fruit"></i>-->
        <!--                <span>fruits</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Apple</a></li>-->
        <!--                <li><a href="#">Orange</a></li>-->
        <!--                <li><a href="#">Strawberry</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-dairy-products"></i>-->
        <!--                <span>dairy farm</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Egg</a></li>-->
        <!--                <li><a href="#">milk</a></li>-->
        <!--                <li><a href="#">butter</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-crab"></i>-->
        <!--                <span>sea foods</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Lobster</a></li>-->
        <!--                <li><a href="#">Octopus</a></li>-->
        <!--                <li><a href="#">Shrimp</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-salad"></i>-->
        <!--                <span>diet foods</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Salmon</a></li>-->
        <!--                <li><a href="#">Potatoes</a></li>-->
        <!--                <li><a href="#">Greens</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-dried-fruit"></i>-->
        <!--                <span>dry foods</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">noodles</a></li>-->
        <!--                <li><a href="#">Powdered milk</a></li>-->
        <!--                <li><a href="#">nut & yeast</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-fast-food"></i>-->
        <!--                <span>fast foods</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">mango</a></li>-->
        <!--                <li><a href="#">plumsor</a></li>-->
        <!--                <li><a href="#">raisins</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-cheers"></i>-->
        <!--                <span>drinks</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Wine</a></li>-->
        <!--                <li><a href="#">Juice</a></li>-->
        <!--                <li><a href="#">Water</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-beverage"></i>-->
        <!--                <span>coffee</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Cappuchino</a></li>-->
        <!--                <li><a href="#">Espresso</a></li>-->
        <!--                <li><a href="#">Latte</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-barbecue"></i>-->
        <!--                <span>meats</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Meatball</a></li>-->
        <!--                <li><a href="#">Sausage</a></li>-->
        <!--                <li><a href="#">Poultry</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="category-item">-->
        <!--            <a class="category-link dropdown-link" href="#">-->
        <!--                <i class="flaticon-fish"></i>-->
        <!--                <span>fishes</span>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-list">-->
        <!--                <li><a href="#">Agujjim</a></li>-->
        <!--                <li><a href="#">saltfish</a></li>-->
        <!--                <li><a href="#">pazza</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--    <div class="category-footer">-->
        <!--        <p>All Rights Reserved by <a href="#">Mironcoder</a></p>-->
        <!--    </div>-->
        <!--</aside>-->
        
        <?php include 'category-sidebar.php'; ?>
        
        <?php include 'side-bar.php'; ?>
     
        <?php include 'mobile-menu.php'; ?>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>contact us</h2>          
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    CONTACT PART START
        =======================================-->


            <?php
      $sql = "SELECT * FROM tb_contact_us";
      $result = mysqli_query($conn, $sql);
      $count = 0;
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $mobile = $row['mobile_number'];
             $address = $row['address'];
               $email = $row['email_us'];
    ?>
        <section class="inner-section contact-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-card">
                            <i class="icofont-location-pin"></i>
                            <h4>head office</h4>
                            <p><?php echo $address ?> </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-card active">
                            <i class="icofont-phone"></i>
                            <h4>phone number</h4>
                            <p>
                                <a href="#"><?php echo $mobile?> <span>(toll free)</span></a>
                                <a href="#">009-215-5595</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact-card">
                            <i class="icofont-email"></i>
                            <h4>Support mail</h4>
                            <p>
                                <a href="#"><?php echo $email ?></a>
                                <a href="#">info@example.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }} ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.1198788435363!2d80.82633237535462!3d26.836139163377318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bff3e34dd1d4f%3A0xc5d69250c13efe61!2sTVS%20SOLUTIONS!5e0!3m2!1sen!2sin!4v1751522471677!5m2!1sen!2sin" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="contact-form">
                            <h4>Drop Your Thoughts</h4>
                            <div class="form-group">
                                <div class="form-input-group">
                                    <input class="form-control" type="text" placeholder="Your Name" required>
                                    <i class="icofont-user-alt-3"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input-group">
                                    <input class="form-control" type="email" placeholder="Your Email" required>
                                    <i class="icofont-email"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input-group">
                                    <input class="form-control" type="number" placeholder="Your Mobile number" required>
                                    <i class="icofont-phone"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input-group">
                                    <textarea class="form-control" placeholder="Your Message" required></textarea>
                                    <i class="icofont-paragraph"></i>
                                </div>
                            </div>
                            <button type="submit" class="form-btn-group">
                                <i class="fas fa-envelope"></i>
                                <span>send message</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="branch-card">
                            <img src="images/branch/01.jpg" alt="branch">
                            <div class="branch-overlay">
                                <h3>dhaka</h3>
                                <p>kawran bazar, 1100 east tejgaon, dhaka.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="branch-card">
                            <img src="images/branch/02.jpg" alt="branch">
                            <div class="branch-overlay">
                                <h3>Narayanganj</h3>
                                <p>west jalkuri, 1420 shiddirganj, narayanganj.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="branch-card">
                            <img src="images/branch/03.jpg" alt="branch">
                            <div class="branch-overlay">
                                <h3>chandpur</h3>
                                <p>east lautuli, 2344 faridganj, chandpur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="branch-card">
                            <img src="images/branch/04.jpg" alt="branch">
                            <div class="branch-overlay">
                                <h3>noakhli</h3>
                                <p>begumganj, 3737 shonaimuri, noakhli.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CONTACT PART END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get 20% Discount for Subscriber</h2>
                            <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <?php include 'footer.php'; ?>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/countdown/countdown.min.js"></script>
        <script src="vendor/niceselect/nice-select.min.js"></script>
        <script src="vendor/slickslider/slick.min.js"></script>
        <script src="vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/nice-select.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/accordion.js"></script>
        <script src="js/venobox.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>

</html>






