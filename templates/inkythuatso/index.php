<?php
/**

 */

// No direct access.
defined('_JEXEC') or die;
$menu_list = JKentlib::getMainMenu(8);
$intro_link = JRoute::_(ContentHelperRoute::getArticleRoute(JKentlib::INTRO_ID));
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Astonish - Multipurpose HTML5 Theme</title>
    <!-- ================================ -->
    <!-- ========== CSS INCLUDES ========== -->
    <!-- ================================ -->
    <link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/buttons.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/icomoon.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/parallax-slider.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/prettyPhoto.css" media="screen" rel="stylesheet" type="text/css">
    <link id="header-switch" href="css/headers/dark.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/animate.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/astonish.css" media="screen" rel="stylesheet" type="text/css">
    <link id="style-switch" href="css/color-schemes/marine.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/default.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body data-offset="62" data-spy="scroll" data-target=".navbar" >
<!-- ===== PAGE LOADER GRAPHIC ===== -->
<div id="pageloader">
    <div class="loader-img">
        <img alt="loader" src="img/loader.gif" /> </div>
</div>

<!-- ============ START TOP STICKY MENU ========== -->
<!-- ======================================== -->
<nav class="navbar navbar-default navbar-fixed-top nav-fadein" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <i class="fa fa-bars fa-fw"></i>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a  href="index.php">Trang chủ</a></li>
                <li ><a  href="<?php echo $intro_link;?>">Giới thiệu</a></li>
                <?php
                foreach ($menu_list as $menu_item) {
                    $title = $menu_item->title;
                    $link = JRoute::_(ContentHelperRoute::getCategoryRoute($menu_item->id));
                ?>
                <li><a  href="<?php echo $link;?>"><?php echo $title;?></a></li>
                <?php }?>
                <!--		 <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa-caret-down"></i></a>
                          <ul class="dropdown-menu">
                            <li><a  href="about.html">About Us</a></li>
                           <li><a  href="pricing.html">Pricing Tables</a></li>
                            <li><a  href="testimonials.html">Testimonials</a></li>
                             <li><a  href="services.html">Services</a></li>
                              <li><a  href="team-members.html">Team Members</a></li>
                              <li><a  href="faq.html">F.A.Q.</a></li>
                          </ul>
                        </li>
                         <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa-caret-down"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="animation-engine.html">Animation Engine</a></li>
                            <li><a href="support.html">Support and Documentation</a></li>
                            <li><a href="isotope.html">Isotope Filter</a></li>
                            <li><a href="parallax.html">Parallax Effects</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="fa-caret-down"></i></a>
                          <ul class="dropdown-menu">

                            <li><a href="portfolio-fullwidth.html">Portfolio Fullwidth</a></li>
                            <li><a href="portfolio-single.html">Single Project</a></li>
                          </ul>
                        </li>
                       <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa-caret-down"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog Fullwidth</a></li>
                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a href="blog-small-img-sidebar.html">Blog Small Image</a></li>
                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                            <li><a href="post.html">Post Fullwidth</a></li>
                            <li><a href="post-sidebar.html">Post Sidebar</a></li>
                          </ul>
                        </li>-->
                <!--<li><div class="social-icons"><a href="#"><i class="im-twitter"></i></a><a href="#"><i class="im-facebook"></i></a><a href="#"><i class="im-google-plus"></i></a></div></li>-->
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<jdoc:include type="message" />
<jdoc:include type="component" />
<!-- ======================================== -->
<!-- ============== START FOOTER ============== -->
<!-- ======================================== -->
<div class="fullwidth-section half-padding footer">
    <div class="container">
        <div class="row social-icons text-center">
            <div class="col-md-12">
                <i class="im-twitter"></i>

                <i class="im-facebook"></i>

                <img alt="" class="img-responsive footer-logo ae" data-animation="flip" data-offset="95%" data-speed="1000" src="img/logo-footer.png">

                <i class="im-google-plus"></i>

                <i class="im-instagram"></i>
            </div>
        </div>
        <div class="row text-center" style="margin-top: 20px">
            <div class="col-md-12">
                © 2014 All Rights Reserved. Designed by <a href="http://themeforest.net/user/CreativelyCoded/portfolio?ref=CreativelyCoded">CreativelyCoded</a>
            </div>
        </div>
    </div>
</div>
<!-- ======================================== -->
<!-- =============== END FOOTER ============== -->
<!-- ======================================== -->

<!-- ================================================== -->
<!-- ============= START SCROLL TO TOP SCRIPT ============= -->
<!-- ================================================== -->
<div class="scrollup">
    <a class="scrolltotop" href="#"><i class="fa fa-angle-double-up"></i></a></div>
<!-- ================================================== -->
<!-- ============== END SCROLL TO TOP SCRIPT ============== -->
<!-- ================================================== -->

<!-- ===================================== -->
<!-- ========== START JQUERY SCRIPTS ========== -->
<!-- ===================================== -->
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/stellar.js"></script>
<script type="text/javascript" src="js/counter.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.plus.js"></script>
<script type="text/javascript" src="js/jquery.superslides.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/animation-engine.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
<script type="text/javascript" src="js/style-switcher.js"></script>
<script type="text/javascript" src="js/astonish.js"></script>
<!-- ==================================== -->
<!-- ========== END JQUERY SCRIPTS ========== -->
<!-- ==================================== -->
</body>
</html>