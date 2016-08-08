<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>لیست علاقه مندیها</title>
        <meta  http-equiv="Content-Language" content="fa">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-open">
                            <a href="javascript:;" class="c-toggler">My Profile
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li class="c-active">
                                    <a href="shop-customer-dashboard.html">My Dashbord</a>
                                </li>
                                <li class="">
                                    <a href="shop-customer-profile.html">Edit Profile</a>
                                </li>
                                <li class="">
                                    <a href="shop-order-history.html">Order History</a>
                                </li>
                                <li class="">
                                    <a href="shop-customer-addresses.html">My Addresses</a>
                                </li>
                                <li class="">
                                    <a href="shop-product-wishlist.html">My Wishlist</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">My Wishlist</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="c-shop-wishlist-1">
                        <div class="c-border-bottom hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Product</h3>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Description</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Stock</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Price</h3>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-border-bottom c-row-item">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/shop2/24.jpg"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">Winter Coat</a>
                                        </li>
                                        <li class="c-margin-b-10">Color: Blue</li>
                                        <li>Size: S</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                                    <i class="fa fa-shopping-cart"></i>Add Cart</button>
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">Remove</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">In Stock</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18">$20.00</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
                        <!-- BEGIN: PRODUCT ITEM ROW -->
                        <div class="c-row-item">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                            <img width="100%" class="img-responsive" src="assets/base/img/content/shop2/12.jpg"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details.html" class="c-font-bold c-font-22 c-theme-link">Sports Wear</a>
                                        </li>
                                        <li class="c-margin-b-10">Color: Blue</li>
                                        <li>Size: S</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                                    <i class="fa fa-shopping-cart"></i>Add Cart</button>
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">Remove</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                                    <p class="c-font-sbold c-font-18">In Stock</p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18">$15.00</p>
                                </div>
                            </div>
                        </div>
                        <!-- END: PRODUCT ITEM ROW -->
                    </div>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64667612-1', 'themehats.com');
  ga('send', 'pageview');
</script>
</body>


</html>
