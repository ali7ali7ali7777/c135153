
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

   <?php 
			
$rant_a1 = mysqli_query($mysqlicheck,"SELECT * FROM `contact`");
		if (mysqli_num_rows($rant_a1) > 0) {	
			$row_a1=mysqli_fetch_assoc($rant_a1);
			}
			else
			{
				echo "الطفا ارتباط با ما را تکمیل نمائید.";
			}
		
		
		
		
		?>         
           
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
		</div>
            <!-- END: FEATURES 13-1 -->
            <!-- END: CONTENT/FEATURES/FEATURES-13-1 -->

            <?php require_once "footer.php"; ?>