<?php  
require("config.php");
session_start();
$mail=$_SESSION['mail'];
?><!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:47:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>SocialEngineering - Multipurpose Social Network HTML5 Template</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="ThemeLooks">
    <meta name="description" content="Multipurpose Social Network HTML5 Template">
    <meta name="keywords" content="social media, social network, forum, shop, bootstrap, html5, css3, template, responsive, retina ready">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700%7CRoboto:300,400,400i,500,700">

    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">
    
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <?php  include("header.php"); ?>
        <!-- Header Section End -->

        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Domain</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Domain</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12">
                        <div class="main--content-inner">
                            <!-- Cart Items Start -->
                            <div class="cart--items pb--60">
                                <form action="#">
                                    <table class="table">
                                        <thead class="ff--primary fs--18 text-black bg-lighter">
                                            <tr>
                                                <th>Domain</th>
                                                <th>Author</th>
                                                <th>Material Name</th>
                                                <th>Read</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs--14 text-darkest">
                                            <tr>
                                                <td data-label="Products">
                                                    <a href="#" data-overlay="0" data-overlay-color="white">
                                                        <img src="img/cart-img/c.jpg" alt="">
														
                                                    </a>
                                                </td>
                                                <td data-label="Rate">
                                                    <a href="#" class="btn-link">Dr.SS.KHANDARE</a>
                                                </td>
                                                <td data-label="material_name">
                                                    <p>Programming in C & C++</p>
                                                </td>
                                                <td data-label="Total Price">
                                                    <div class="product--quantity-wrapper">
                                                        <!-- Product Quantity Start -->
                                                      <div class="col-xs-7">
                                                       <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat"><a href="c.php">Read</a></button>
                                                      </div>

                                                              
                                                               
                                                        <!-- Product Quantity End -->
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Products">
                                                    <a href="#" data-overlay="0" data-overlay-color="white">
                                                        <img src="img/cart-img/java.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td data-label="Rate">
                                                    <a href="#" class="btn-link">Herbert</a>
                                                </td>
                                                <td data-label="material_name">
                                                    <p>The Complete Reference JAVA</p>
                                                </td>
                                                <td data-label="Total Price">
                                                    <div class="product--quantity-wrapper">
                                                        <!-- Product Quantity Start -->
                                                        <div class="col-xs-7">
                                                       <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Read</button>
                                                      </div>
                                                        <!-- Product Quantity End -->
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="Products">
                                                    <a href="#" data-overlay="0" data-overlay-color="white">
                                                        <img src="img/cart-img/php.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td data-label="Rate">
                                                    <a href="#" class="btn-link">W.Jason</a>
                                                </td>
                                                <td data-label="material_name">
                                                    <p>Beginning PHP and MySQL</p>
                                                </td>
                                                <td data-label="Total Price">
                                                    <div class="product--quantity-wrapper">
                                                        <!-- Product Quantity Start -->
                                                       <div class="col-xs-7">
                                                       <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Read</button>
                                                      </div>
                                                        <!-- Product Quantity End -->
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="remove"></a>
                                                </td>
                                            </tr>
											<tr>
                                                <td data-label="Products">
                                                    <a href="#" data-overlay="0" data-overlay-color="white">
                                                        <img src="img/cart-img/sql.jpg" alt="">
                                                    </a>
                                                </td>
                                                <td data-label="Rate">
                                                    <a href="#" class="btn-link">Peter Adams</a>
                                                </td>
                                                <td data-label="material_name">
                                                    <p>SQL</p>
                                                </td>
                                                <td data-label="Total Price">
                                                    <div class="product--quantity-wrapper">
                                                        <!-- Product Quantity Start -->
                                                        <div class="col-xs-7">
                                                       <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Read</button>
                                                      </div>
                                                        <!-- Product Quantity End -->
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="remove"></a>
                                                </td>
                                            </tr><tr>
                                                <td data-label="Products">
                                                    <a href="#" data-overlay="0" data-overlay-color="white">
                                                        <img src="img/cart-img/phython.jpeg" alt="">
                                                    </a>
                                                </td>
                                                <td data-label="Rate">
                                                    <a href="#" class="btn-link">Charles</a>
                                                </td>
                                                <td data-label="material_name">
                                                    <p>PYTHON for Everybody</p>
                                                </td>
                                                <td data-label="Total Price">
                                                    <div class="product--quantity-wrapper">
                                                        <!-- Product Quantity Start -->
                                                       <div class="col-xs-7">
                                                       <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Read</button>
                                                      </div>
                                                        <!-- Product Quantity End -->
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="remove"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="cart--submit-btn text-right">
                                        <button type="submit" class="btn btn-default">Update Cart</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Cart Items End -->

                            
                        </div>
                    </div>
                    <!-- Main Content End -->
                </div>
            </div>
        </section>
        <!-- Page Wrapper End -->

        <!-- Footer Section Start -->
        <?php  include("footer.php"); ?>
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn"><i class="fa fa-caret-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="js/plugins.min.js"></script>

    <!-- ==== Color Switcher Plugin ==== -->
   

    <!-- ==== Main Script ==== -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from themelooks.us/demo/socifly/html/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:47:40 GMT -->
</html>
