<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}
$rant_c1 = mysqli_query($mysqlicheck,"SELECT * FROM `contact`");
		if (mysqli_num_rows($rant_c1) > 0) {	
			$row_c1=mysqli_fetch_assoc($rant_c1);
			}
			else
			{
				echo "الطفا ارتباط با ما را تکمیل نمائید.";
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
        <title>صفحه ارتباط با ما</title>
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
           <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-contact-1 c-option-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-body c-re">
                                    <h3 class="c-font-uppercase c-font-bold">ارتباط با ما</h3>
                                        <div class="c-line-left"></div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">آدرس</div>
                                        <p><?php echo $row_c1['mac'] ?></p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">اطلاعات تماس</div>
                                        <p>
                                            <strong>تلفن : </strong> <?php echo'0'.$row_c1['kod'].' - '. $row_c1['tel_1'].' - '. $row_c1['tel_2']?>
                                            <br/>
                                            <strong>فکس : </strong> <?php echo $row_c1['tel_1'] ?>
                                            </br>
                                            <strong>موبایل : </strong> <?php echo '0'.$row_c1['mobile'] ?>
                                            </br>
                                            <strong>ایمیل : </strong> <?php echo $row_c1['email'] ?>
                                         </p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">آدیگر</div>
                                        <p><?php echo $row_c1['field'] ?></p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">اجتماعی</div>
                                        <br/>
                                        <ul class="c-content-iconlist-1 c-theme">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-youtube-play"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <p class="c-font-lowercase">از طریق فرم زیر می توانید با ما در تماس باشید.</p>
                                    </div>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="نام شما" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="ایمیل شما" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="تلفن تماس" class="form-control c-square c-theme input-lg"> </div>
                                        <div class="form-group">
                                            <textarea rows="8" name="message" placeholder="نوشتن نظر در اینجا ..." class="form-control c-theme c-square input-lg"></textarea>
                                        </div>
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
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
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="//maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
        <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/pages/contact-2.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
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
