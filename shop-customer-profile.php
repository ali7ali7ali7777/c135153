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
        <title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Shop Home 1</title>
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
                        <h3 class="c-font-uppercase c-font-bold">Edit Profile</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <form class="c-shop-form-1">
                        <!-- BEGIN: ADDRESS FORM -->
                        <div class="">
                            <!-- BEGIN: BILLING ADDRESS -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Country</label>
                                    <select class="form-control c-square c-theme">
                                        <option value="1">Malaysia</option>
                                        <option value="2">Singapore</option>
                                        <option value="3">Indonesia</option>
                                        <option value="4">Thailand</option>
                                        <option value="5">China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="First Name"> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="Last Name"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Address</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Street Address"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Town / City</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Town / City"> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">State / County</label>
                                            <select class="form-control c-square c-theme">
                                                <option value="0">Select an option...</option>
                                                <option value="1">Malaysia</option>
                                                <option value="2">Singapore</option>
                                                <option value="3">Indonesia</option>
                                                <option value="4">Thailand</option>
                                                <option value="5">China</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Postcode / Zip</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="Postcode / Zip"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Email Address</label>
                                            <input type="email" class="form-control c-square c-theme" placeholder="Email Address"> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Phone</label>
                                            <input type="tel" class="form-control c-square c-theme" placeholder="Phone"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: BILLING ADDRESS -->
                            <!-- BEGIN: PASSWORD -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Change Password</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="Password"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Repeat Password</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="Password">
                                    <p class="help-block">Hint: The password should be at least six characters long.
                                        <br /> To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & ).</p>
                                </div>
                            </div>
                            <!-- END: PASSWORD -->
                            <div class="row c-margin-t-30">
                                <div class="form-group col-md-12" role="group">
                                    <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                                    <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!-- END: ADDRESS FORM -->
                    </form>
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
