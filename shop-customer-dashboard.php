
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<div class="container">
      
        <?php        
                          
               $sel_l = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ");
				if ($sel_l->num_rows > 0)
				{
					$row_l=mysqli_fetch_assoc($sel_l);
					$row_l["user_type"] 
				}
             ?>                                      
                <?php require_once "profile.php"; ?>
                
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">داشبورد من</h3>
                        <div class="c-line-left"></div>
                        <p class=""> Hello
                            <a href="#" class="c-theme-link">Drake Hiro</a> (not
                            <a href="#" class="c-theme-link">Drake Hiro</a>?
                            <a href="#" class="c-theme-link">خروج</a>).
                            <br /> </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                            <h3 class="c-font-uppercase c-font-bold">Drake Hiro</h3>
                            <ul class="list-unstyled">
                                <li>25, Lorem Lis Street, Orange C, California, US</li>
                                <li>Phone: 800 123 3456</li>
                                <li>Fax: 800 123 3456</li>
                                <li>Email:
                                    <a href="mailto:jango@themehats.com" class="c-theme-link">jango@themehats.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       