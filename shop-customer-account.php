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

            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-shop-login-register-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <form class="c-form-login">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control c-square c-theme input-lg" placeholder="Username">
                                                <span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control c-square c-theme input-lg" placeholder="Password">
                                                <span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="row c-margin-t-40">
                                                <div class="col-xs-8">
                                                    <div class="c-checkbox">
                                                        <input type="checkbox" id="checkbox1-77" class="c-check">
                                                        <label for="checkbox1-77">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Remember me </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <button type="submit" class="pull-left btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <div class="c-content-title-1">
                                            <h3 class="c-left">
                                                <i class="icon-user"></i> حساب کاربری ندارید ?</h3>
                                            <div class="c-line-right c-theme-bg"></div>
                                            <p>Join us and enjoy shopping online today.</p>
                                        </div>
                                        <div class="c-margin-fix">
                                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-form-register" data-animation-speed="600">
                                                <input type="checkbox" id="checkbox6-444" class="c-check">
                                                <label for="checkbox6-444">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Register Now! </label>
                                            </div>
                                        </div>
                                        <form class="c-form-register c-margin-t-20">
                                            <div class="form-group">
                                                <label class="control-label">Country</label>
                                                <select class="form-control c-square c-theme">
                                                    <option value="1">Malaysia</option>
                                                    <option value="2">Singapore</option>
                                                    <option value="3">Indonesia</option>
                                                    <option value="4">Thailand</option>
                                                    <option value="5">China</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">First Name</label>
                                                        <input type="text" class="form-control c-square c-theme" placeholder="First Name"> </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Last Name</label>
                                                        <input type="text" class="form-control c-square c-theme" placeholder="Last Name"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Address</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="Street Address"> </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)"> </div>
                                            <div class="form-group">
                                                <label class="control-label">Town / City</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="Town / City"> </div>
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
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Email Address</label>
                                                    <input type="email" class="form-control c-square c-theme" placeholder="Email Address"> </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Phone</label>
                                                    <input type="tel" class="form-control c-square c-theme" placeholder="Phone"> </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Account Password</label>
                                                <input type="password" class="form-control c-square c-theme" placeholder="Password"> </div>
                                            <div class="form-group c-margin-t-40">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-unstyled c-bs-grid-small-space">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-twitter">
                                                <i class="fa fa-twitter"></i> Sign in with Twitter </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-facebook">
                                                <i class="fa fa-facebook"></i> Sign in with Facebook </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-google">
                                                <i class="fa fa-google-plus"></i> Sign in with Google </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <!-- END: PAGE CONTENT -->
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
