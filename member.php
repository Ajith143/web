<?php  
require("config.php");
session_start();
$mail=$_SESSION['mail'];
?><!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:22 GMT -->
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
                    <h2 class="h1 text-white">Members</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.php" class="btn-link">Home</a></li>
                    <li class="active"><span class="text-primary">Members</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">All Members : 30,000</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Last Active</option>
                                            <option value="new-registered">New Registerd</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->

                            <!-- Member Items Start -->
                            <div class="member--items">
                                <div class="row gutter--15 AdjustRow">
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Rosa R. Secor</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-02.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Juan Bishop</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-03.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Kelly Salazar</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-04.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Gregory L. Caudill</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-05.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">William P. Waite</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-06.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Eileen K. Ruiz</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-07.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Byron H. Robinson</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-08.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Kelly Brewer</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-09.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Jessica James</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-10.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Kelvin S. Williams</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-11.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Denise K. Chambers</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.php" class="btn-link">
                                                    <img src="img/members-img/member-12.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.php" class="btn-link">Brendan K. Heywood</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="Send Message" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add Friend" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Media" class="btn-link" data-toggle="tooltip" data-placement="bottom">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Member Items End -->

                            <!-- Page Count Start -->
                            <div class="page--count pt--30">
                                <label class="ff--primary fs--14 fw--500 text-darker">
                                    <span>Viewing</span>

                                    <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                    <input type="number" name="page-count" value="01" class="form-control form-sm">
                                    <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>

                                    <span>of 2,500</span>
                                </label>
                            </div>
                            <!-- Page Count End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    
                    <!-- Main Sidebar End -->
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

<!-- Mirrored from themelooks.us/demo/socifly/html/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:27 GMT -->
</html>
