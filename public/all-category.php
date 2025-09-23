<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
        <title>Demo - All Category</title>

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
        <link rel="stylesheet" href="css/all-category.css">
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
       
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>all category</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='index.php'>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">all-category</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    CATEGORY PART START
        =======================================-->
        <section class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-filter">
                            <div class="filter-show">
                                <label class="filter-label">Show :</label>
                                <select class="form-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select>
                            </div>
                            <div class="filter-short">
                                <label class="filter-label">Short by :</label>
                                <select class="form-select filter-select">
                                    <option selected>default</option>
                                    <option value="3">trending</option>
                                    <option value="1">featured</option>
                                    <option value="2">recommend</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/dairy.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>dairy items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/vegetables.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>vegetable items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/drinks.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>coffe & drinks</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fish.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fish items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/groceries.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>grocery items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/meat.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>meat items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fruits.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fresh fruits</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/seafoods.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>seafoods</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fastfoods.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fastfoods</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/dairy.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>dairy items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/vegetables.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>vegetable items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/drinks.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>coffe & drinks</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fish.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fish items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/groceries.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>grocery items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/meat.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>meat items</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fruits.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fresh fruits</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/seafoods.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>seafoods</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fastfoods.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fastfoods</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category-wrap">
                            <div class="category-media">
                                <img src="images/category/fastfoods.jpg" alt="category">
                                <div class="category-overlay">
                                    <a href='#'><i class="fas fa-link"></i></a>
                                </div>
                            </div>
                            <div class="category-meta">
                                <h4>fastfoods</h4>
                                <p>(25 items)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            <p class="page-info">Showing 12 of 60 Results</p>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">60</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CATEGORY PART END
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

<!-- Mirrored from mironcoder-greeny.netlify.app/assets/ltr/all-category by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Feb 2025 10:55:40 GMT -->
</html>






