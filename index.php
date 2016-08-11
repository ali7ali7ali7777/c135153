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
        <title>فروشگاه</title>
        <meta  http-equiv="Content-Language" content="fa">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
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
<!--<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">-->
    <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->


			<?php require_once "header.php"; ?>



        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: LAYOUT/SLIDERS/SHOP-REVO-SLIDER-1 -->
            <!-- BEGIN: REVOLUTION SLIDER 2 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-13" style="float:none" >
                <div class="tp-banner-container tp-fullscreen">
                    <div class="tp-banner rev_slider" data-version="5.0" >
                        <ul>
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="assets/base/img/content/shop4/57.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!--BEGIN: MAIN TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="-385" data-voffset="-200" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-bold c-font-uppercase c-font-white" style="direction:ltr"> WINTER COLLECTION </h3>
                                </div>
                                <!--END -->
                                <!--BEGIN: SUB TITLE -->
                                <div class="tp-caption customin customout tp-resizeme c-center" data-x="center" data-y="center" data-hoffset="-390" data-voffset="-35" data-speed="500" data-start="1500" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h1 class="c-highlight-title">ON SALE
                                        <span class="c-theme-font">NOW</span>
                                    </h1>
                                    <div class="c-slider-line c-bg-white"></div>
                                    <p class="c-sub-title c-font-16 c-font-white c-font-uppercase"> Lorem ipsum dolor sit amet, consectetuer
                                        <br> elit sed diam nonummy et nibh euismod </p>
                                </div>
                                <!--END -->
                                <!--BEGIN: ACTION BUTTON -->
                                <div class="tp-caption randomrotateout tp-resizeme" data-x="center" data-y="center" data-hoffset="-390" data-voffset="120" data-speed="500" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-md c-btn-square c-btn-bold c-btn-border-2x c-btn-white c-btn-uppercase c-center">Shop Now</a>
                                </div>
                                <!--END -->
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="assets/base/img/content/shop4/79.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <!--BEGIN: MAIN TITLE -->
                                <div class="tp-caption customin customout tp-resizeme" data-x="center" data-y="center" data-hoffset="385" data-voffset="-200" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-bold c-font-uppercase c-theme-font c-summer"> SUMMER COLLECTION </h3>
                                </div>
                                <!--END -->
                                <!--BEGIN: SUB TITLE -->
                                <div class="tp-caption customin customout tp-resizeme c-center" data-x="center" data-y="center" data-hoffset="390" data-voffset="-35" data-speed="500" data-start="1500" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h1 class="c-highlight-title">ON SALE
                                        <span class="c-theme-font">NOW</span>
                                    </h1>
                                    <div class="c-slider-line c-theme-bg"></div>
                                    <p class="c-sub-title c-font-16 c-font-uppercase"> Lorem ipsum dolor sit amet, consectetuer
                                        <br> elit sed diam nonummy et nibh euismod </p>
                                </div>
                                <!--END -->
                                <!--BEGIN: ACTION BUTTON -->
                                <div class="tp-caption randomrotateout tp-resizeme" data-x="center" data-y="center" data-hoffset="390" data-voffset="120" data-speed="500" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-md c-btn-square c-btn-bold c-btn-border-2x c-theme-btn c-btn-uppercase c-center">Shop Now</a>
                                </div>
                                <!--END -->
                            </li>
                            <!--END -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END: LAYOUT/SLIDERS/SHOP-REVO-SLIDER-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-1-1 -->
            <div class="c-content-box c-size-md">
                <div class="container">
                    <div class="c-content-tab-5 c-bs-grid-reset-space c-theme">
                        <!-- Nav tabs -->
   						<ul class="nav nav-pills c-nav-tab c-arrow" role="tablist">
<?php 
$rant_i1 = mysqli_query($mysqlicheck,'SELECT * FROM gro where gro_kod like "___" and gro_status =1');
if ( mysqli_num_rows($rant_i1) > 0)
{
	$I_ac = "1";	
	while($row_i1=mysqli_fetch_assoc($rant_i1))
	{
		
	  	echo '<li role="presentation"';
				if ($I_ac == "1") echo 'class="active"';
				echo	 '> <a class="c-font-uppercase" href="#'.$row_i1['gro_id'].'" aria-controls="watches" role="tab" data-toggle="tab">'.$row_i1['gro_name'].'</a>
                         </li>';
				$I_ac ++ ;
	}
}
?>		 
				   </ul>
                 <div class="tab-content">
      <?php 
	  
  
	                      
        $rant_i3 = mysqli_query($mysqlicheck,'SELECT * FROM gro where gro_kod like "___" and gro_status =1');
		if ( mysqli_num_rows($rant_i3) > 0)
		{
			$I_ac = "1";
			while($row_i3=mysqli_fetch_assoc($rant_i3))
			{  
        		echo  '<div role="tabpanel" class="tab-pane fade';
				if ($I_ac == "1") echo " in active";
				echo '"id="'.$row_i3['gro_id'].'">
                           <div class="row">';
				$rant_i4 = mysqli_query($mysqlicheck,'SELECT * FROM object 	where  object_code like "'.$row_i3['gro_kod'].'_____" and object_status = 1 limit 3 ');
				if (mysqli_num_rows($rant_i4) > 0)
				{
					while($row_i4=mysqli_fetch_assoc($rant_i4))
					{
						$src = "images/object/".$row_i4['object_id']."/".$row_i4['object_id'].".jpg";
						if (!file_exists($src))
						$src = "images/none.jpg";
	?>
							<div class="col-sm-4">
                                        <div class="c-content c-content-overlay">
                                            <div class="c-overlay-wrapper c-overlay-padding">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details.php?id=<?php echo $row_i4['object_id'] ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">توضیحات بیشتر</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height:270px; background-image:url(<?php echo $src; ?>);"></div>
                                            <div class="c-overlay-border"></div>
                                        </div>
                                    </div>
			<?php		}
				}
                       echo   "</div>
                            </div>";
			$I_ac ++ ;
			}
		}
		?>
			
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-1-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-1 -->
            <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space c-bg-grey-1">
                <div class="container">
                    <div class="c-content-title-4">
                        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                            <span class="c-bg-grey-1">پربازدیدها</span>
                        </h3>
                    </div>
     <?php
		$rant_i5 = mysqli_query($mysqlicheck,"SELECT * FROM object where object_status =1 ORDER BY object_visit DESC limit 8");
		if (mysqli_num_rows($rant_i5) > 0)
		{
			$I_ac = "1";
			while($row_i5=mysqli_fetch_assoc($rant_i5))
			{    
				$src_v = "images/object/".$row_i5['object_id']."/".$row_i5['object_id'].".jpg";
				if (!file_exists($src_v))
				$src_v = "images/none.jpg";         
                if ($I_ac == "1" || $I_ac == "5") echo   "<div class=\"row\">";
	?>
                	<div class="col-md-3 col-sm-6 c-margin-b-20">
                            <div class="c-content-product-2 c-bg-white">
                                <div class="c-content-overlay">
                                    <div class="c-label c-label-right c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">تخفیف</div>
                                    <div class="c-label c-label-left c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">جدید</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.php?id=<?php echo $row_i5['object_id']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">جزئیات</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(<?php echo $src_v; ?>);"></div>
                                </div>
                                <div class"c-info">
                                    <p class="c-title c-font-18 c-font-slim"><?php echo $row_i5['object_name'] ; ?></p>
                                    <p class="c-price c-font-16 c-font-slim"><?php echo $row_i5['object_sale_di']; ?> ريال  &nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red"><?php echo $row_i5['object_sale']; ?> ريال </span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top" role="group">
                                        <a href="shop-product-wishlist.php?id=<?php echo $row_i5['object_id']; ?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">علاقه مندیها</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.php?id=<?php echo $row_i5['object_id'];?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">سبد خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
     <?php                   
                        
  if ($I_ac == "4" || $I_ac == "8") echo "</div>";
       $I_ac ++;              
			}
		}
                     
       ?>              
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-2-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-3 -->
            <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space" style="background-image: url(assets/base/img/content/shop-backgrounds/135.jpg)">
                <div class="container">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-center c-font-bold">محبوبترینها</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <div class="row">
                        
                        
                          <?php
		$rant_i6 = mysqli_query($mysqlicheck,"SELECT * FROM object where object_status =1 ORDER BY object_pupolar DESC limit 4");
		if (mysqli_num_rows($rant_i5) > 0)
		{
			while($row_i6=mysqli_fetch_assoc($rant_i6))
			{   
				$src_p = "images/object/".$row_i6['object_id']."/".$row_i6['object_id'].".jpg";
				if (!file_exists($src_p))
				$src_p = "images/none.jpg"; 
		?>         
                	<div class="col-md-3 col-sm-6 c-margin-b-20">
                            <div class="c-content-product-2 c-bg-white">
                                <div class="c-content-overlay">
                                    <div class="c-label c-label-right c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">تخفیف</div>
                                    <div class="c-label c-label-left c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">جدید</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.php?id=<?php echo $row_i6['object_id']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">جزئیات</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url(<?php echo $src_p ; ?>);"></div>
                                </div>
                                <div class="c-info">
                                    <p class="c-title c-font-18 c-font-slim"><?php echo $row_i6['object_name']; ?></p>
                                    <p class="c-price c-font-16 c-font-slim"><?php echo $row_i6['object_sale_di']; ?> ريال&nbsp;
                                        <span class="c-font-16 c-font-line-through c-font-red"><?php echo $row_i6['object_sale_di']; ?> ريال</span>
                                    </p>
                                </div>
                                <div class="btn-group btn-group-justified" role="group">
                                    <div class="btn-group c-border-top\" role="group">
                                        <a href="shop-product-wishlist.php?id=<?php echo $row_i6['object_id']; ?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">علاقه مندیها</a>
                                    </div>
                                    <div class="btn-group c-border-left c-border-top" role="group">
                                        <a href="shop-cart.php?id=<?php echo $row_i6['object_id']; ?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">سبد خرید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
               <?php
           }
		}
                     
       ?> 
                        
                        
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-2-3 -->
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
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
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
        <script>
            $(document).ready(function()
            {
                var slider = $('.c-layout-revo-slider .tp-banner');
                var cont = $('.c-layout-revo-slider .tp-banner-container');
                var api = slider.show().revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    responsiveLevels: [2048, 1024, 778, 320],
                    gridwidth: [1240, 1024, 778, 320],
                    gridheight: [868, 768, 960, 720],
                    delay: 15000,
                    startwidth: 1170,
                    startheight: App.getViewPort().height,
                    navigationType: "hide",
                    navigationArrows: "solo",
                    touchenabled: "on",
                    navigation:
                    {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        arrows:
                        {
                            style: "circle",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left:
                            {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right:
                            {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    spinner: "spinner2",
                    fullScreenOffsetContainer: '.c-layout-header',
                    shadow: 0,
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0
                });
            }); //ready
        </script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
</body>


</html>
