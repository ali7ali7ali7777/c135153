<?php


$rant_f1 = mysqli_query($mysqlicheck,"SELECT * FROM `contact`");
		if (mysqli_num_rows($rant_f1) > 0) {	
			$row_f1=mysqli_fetch_assoc($rant_f1);
			}
			else
			{
				echo "الطفا ارتباط با ما را تکمیل نمائید.";
			}

?>




<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
    <div class="container">
        <div class="c-prefooter c-bg-white">
            <div class="c-head">
                <div class="row">
                    <div class="col-md-6">
                        <div class="c-left">
                            <div class="socicon">
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="c-right">
                            <h3 class="c-title c-font-uppercase c-font-bold">دانلود اپلیکشن موبایل</h3>
                            <div class="c-icons" >
                                <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="اندروید" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="اپل" data-container="body"></a>
                                <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="ویندوز" data-container="body"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-line"></div>
            <div class="c-body">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">About Jango</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="#">Delivery</a>
                            </li>
                            <li>
                                <a href="#">Promotions</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                        </ul>
                        <ul class="c-links c-theme-ul">
                            <li>
                                <a href="#">Blogs</a>
                            </li>
                            <li>
                                <a href="#">Projects</a>
                            </li>
                            <li>
                                <a href="#">Clients</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Stats</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                         <div class="c-content-title-1 c-title-md">
                            <h3 class="c-font-uppercase c-font-bold">
								<a href="page-about.php"><span class="c-theme-font">درباره ما</span></a>
                            </h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-text c-font-16 c-font-regular" style="text-align:justify;"><?php echo $row_f1['about_title_1']; ?></p>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="c-content-title-1 c-title-md">
                            <h3 class="c-title c-font-uppercase c-font-bold">
								<a href="page-contact.php"><span class="c-theme-font">ارتباط با ما</span></a>
                            </h3>
                            <div class="c-line-left hide"></div>
                        </div>
                        <p class="c-address c-font-16"> <?php echo $row_f1['mac']; ?>
                            <br/> تلفن : <?php echo $row_f1['tel_1']. ' - 0'.$row_f1['kod']; ?>
                            <br/> فکس : <?php echo $row_f1['fax']; ?>
                            <br/> ایمیل :
                            <a href="mailto:info@jango.com">
                                <span class="c-theme-color"><?php echo $row_f1['email']; ?></span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2015 &copy; JANGO
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
                <div class="col-md-6 col-sm-12 c-col">
                    <ul class="list-unstyled list-inline pull-left">
                        <li>
                            <img class="img-responsive" src="assets/base/img/content/payments/light/1.png" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="assets/base/img/content/payments/light/2.png" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="assets/base/img/content/payments/light/22.png" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="assets/base/img/content/payments/light/5.png" width="60" />
                        </li>
                        <li>
                            <img class="img-responsive" src="assets/base/img/content/payments/light/6.png" width="60" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
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
        <script src="assets/plugins/zoom-master/jquery.zoom.min.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script>
		
		$('#button').click(function() {
			var val1 = $('#text1').val();
			$.ajax({
				type: 'POST',
				url: 'process.php',
				data: { id: val1},
				success: function(response) {
					$('#result').html(response);
				}
			 });
		});
				
		
		
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