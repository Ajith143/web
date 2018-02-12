<?php
    include("config.php");
$q_id=$_GET['id'];
if($_SESSION['user_id']!='')
{
    $user_id=$_SESSION['user_id'];
}
if(isset($_POST['submit']))
{
    $rep_content=$_POST['content'];
    
    $rep_ins_qry=mysql_query("insert into reply_dtl (user_id,q_id,content,created_dtm) values('$user_id','$q_id','$rep_content',now())");
    
    if($rep_ins_qry)
    {
        ?>
        <script>
            alert("Your Answer is posted Successfully");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Cant Post Your Answer");
        </script>
        <?php
    }
    
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themelooks.us/demo/socifly/html/member-forum-topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:47 GMT -->
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

        <!-- Cover Header Start -->
        <div class="cover--header pt--80 text-center" data-bg-img="img/cover-header-img/bg-01.jpg" data-overlay="0.6" data-overlay-color="white">
            <div class="container">
                <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                    <img src="img/cover-header-img/avatar-01.jpg" alt="">
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">Eileen K. Ruiz</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
            </div>
        </div>
        <!-- Cover Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li><a href="activity1.php">Activity</a></li>
                                    <li><a href="member-groups.php">Groups</a></li>
                                    <li class="active"><a href="member-forum-topics.php">Forum</a></li>
                                    <li><a href="member-media-all.php">Media</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav End -->

                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--50 clearfix">
                                <div class="filter--links float--left">
                                    <ul class="nav ff--primary">
                                        <li ><a href="#">Questions</a></li>
                                        <liclass="active"><a href="#">Recent Questions</a></li>
                                     
                                    </ul>
                                </div>
                            </div>
                 
				 
				 
				 <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <br>
                
               <?php
                $sel_latest_qry=mysql_query("select ques_dtl.*, user_dtl.name from ques_dtl inner join user_dtl on ques_dtl.user_id=user_dtl.user_id where ques_dtl.q_id='$q_id'");
                if(mysql_num_rows($sel_latest_qry)>0)
                {
                while($sel_latest_qry_arr=mysql_fetch_array($sel_latest_qry))
                {
                ?>
                <blockquote>
  <a href="view-question.php?id=<?=$sel_latest_qry_arr['q_id']?>"><h2><?=$sel_latest_qry_arr['sub']?></h2></a>
  <p>By <?=$sel_latest_qry_arr['name']?> On <?=$sel_latest_qry_arr['created_dtm']?></p>
  <div><?=$sel_latest_qry_arr['des']?></div>
</blockquote>
                <?
                }
                
                if($sel_latest_qry)
                {
                    ?>
                    <h3>Answers</h3>
                    <?
                    $reply_qry=mysql_query("select reply_dtl.* , user_dtl.name from reply_dtl inner join user_dtl on reply_dtl.user_id=user_dtl.user_id where reply_dtl.q_id='$q_id'");
                    while($reply_qry_arr=mysql_fetch_array($reply_qry))
                    {
                        ?>
                        <h4><i>Replyed by <?=$reply_qry_arr['name']?></i></h4>
                        <div class="col-lg-12 ">
                            <?=$reply_qry_arr['content']?>
                        </div>
                        <?
                    }
                }
                ?>
                <form method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Reply</label>
                    
                  </div>
                    <textarea name="content" id="editor1" rows="10" cols="80">
                Your ideas/information
                    </textarea>
                   <div class="form-group">
                       <button name="submit" type="submit" class="btn btn-primary">Reply</button>
                       <a href="discussion.php" class="btn btn-warning">Back</a>
                   </div>
                </form>
                <?
                
                }
                else
                {
                    echo "<h2>Sorry! Data Not Found</h2>";
                }
              ?>
               
            </div>
        </div>
    </div>
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

<!-- Mirrored from themelooks.us/demo/socifly/html/member-forum-topics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 13:48:48 GMT -->
</html>
