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
