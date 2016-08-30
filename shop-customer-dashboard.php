
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<div class="container">
                                           
                <?php require_once "profile.php"; ?>
                
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">داشبورد من</h3>
                        <div class="c-line-left"></div>
                        <p class=""> سلام 
                            <?php echo $row_p["user_name"].' '.$row_p["user_family"] ; ?> عزیز (
                            <a href="login.php?o" class="c-theme-link">خروج</a>).
                            <br /> </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                            <h3 class="c-font-uppercase c-font-bold"><?php echo $row_p["user_name"].' '.$row_l["user_family"] ; ?></h3>
                            <ul class="list-unstyled">
                                <li><?php echo $row_p["user_country"].' - '.$row_p["user_city"].' - '.$row_p["user_address1"] ; ?></li>
                                <li>تلفن : <?php echo $row_p["user_tell1"];?></li>
                               <li>ایمیل : 
                                    <a href="mailto:<?php echo $row_p["user_email"];?>" class="c-theme-link"><?php echo $row_p["user_email"];?></a>
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
       