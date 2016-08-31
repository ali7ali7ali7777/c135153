
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<div class="container">
                
                 <?php require_once "profile.php"; ?>
                
                <div class="c-layout-sidebar-content ">
                   
<?php                   
$code = get_safe_post($mysqlicheck,"code");
$action = get_safe_post($mysqlicheck,"action");
					

					
?>
               <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-MY-ADDRESSES-1 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">آدرسهای من</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <div class="row c-margin-t-25">
                        <div class="col-md-4 col-sm-4 col-xs-12 c-margin-b-20 c-margin-t-10">آدرسهای زیر به طور پیشفرض بر روی صفحه پرداخت قرار خواهد گرفت.</div>
                        <div class="col-md-4 col-sm-4 col-xs-12 c-margin-b-20">
                            <h3 class="c-font-uppercase c-font-bold">آدرس قبض</h3>
                            <ul class="list-unstyled">
                                <li><?php echo $user_name .  "</li>
                                <li>".$row_p['user_country']." - ".$row_p['user_city']."</li>
                                <li>".$row_p['user_address1']."</li>
                                <li>تلفن: ".$row_p['user_tell1']; ?></li>
                            </ul>
                            <form action="shop-customer-e-a.php" method="post">
                            	<input type="hidden" value="1" name="nu">
                           		<button class="btn c-theme-btn c-btn-square " name="send" value="edit">
                                <i class="fa fa-edit"></i> ویرایش</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 c-margin-b-20">
                            <h3 class="c-font-uppercase c-font-bold">آدرس ارسال</h3>
                            <ul class="list-unstyled">
                                <li><?php echo $user_name .  "</li>
                                <li>".$row_p['user_country']." - ".$row_p['user_city']."</li>
                                <li>".$row_p['user_address2']."</li>
                                <li>تلفن: ".$row_p['user_tell2']; ?></li>
                            </ul>
                            <form action="shop-customer-e-a.php" method="post">
                            	<input type="hidden" value="2" name="nu">
                           		<button class="btn c-theme-btn  c-btn-square" name="send" value="edit">
                                <i class="fa fa-edit"></i> ویرایش</button>
                            </form>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-MY-ADDRESSES-1 -->
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
