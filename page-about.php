<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}




$rant_a1 = mysqli_query($mysqlicheck,"SELECT * FROM `contact`");
		if (mysqli_num_rows($rant_a1) > 0) {	
			$row_a1=mysqli_fetch_assoc($rant_a1);
			}
			else
			{
				echo "الطفا ارتباط با ما را تکمیل نمائید.";
			}

?>


?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>صفحه درباره ما</title>
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

            <!-- BEGIN: CONTENT/FEATURES/FEATURES-13-1 -->
            <!-- BEGIN: FEATURES 13.1 -->
            <div class="c-content-box c-size-md c-no-padding c-bg-img-center" style="background-image: url(assets/base/img/content/backgrounds/bg-71.jpg)">
                <div class="c-content-feature-13">
                    <div class="row c-reset">
                        <div class="col-md-6 c-bg-dark">
                            <div class="c-feature-13-container">
                                <div class="c-content-title-1">
                                    <h3 class="c-center c-font-uppercase c-font-white c-font-bold">درباره
                                        <span class="c-theme-font">ما</span></h3>
                                    <div class="c-line-center c-theme-bg"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 c-feature-13-tile">
                                        <i class="icon-energy c-theme-font c-font-24"></i>
                                        <div class="c-feature-13-content">
                                            <h4 class="c-font-uppercase c-theme-font c-font-bold">تیتر یک</h4>
                                            <p class="c-font-white"><?php echo $row_a1['about_title_1']; ?></p>
                                        </div>
                                    </div>
                              </div>
                                <div class="row c-margin-t-40">
                                    <div class="col-sm-12 c-feature-13-tile">
                                        <i class="icon-hourglass c-theme-font c-font-24"></i>
                                        <div class="c-feature-13-content">
                                            <h4 class="c-font-uppercase c-theme-font c-font-bold">در ادامه</h4>
                                            <p class="c-font-white"><?php echo $row_a1['about_title_2']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: FEATURES 13-1 -->
            <!-- END: CONTENT/FEATURES/FEATURES-13-1 -->

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
