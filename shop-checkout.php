2
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<!-- BEGIN: PAGE CONTENT -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    <form class="c-shop-form-1" method="post">
                        <div class="row">
                            <!-- BEGIN: ADDRESS FORM -->
                            <div class="col-md-7 c-padding-20">
<?php                              

                                
if (isset($_POST['send']))
{
	$send = get_safe_post($mysqlicheck,"send");
	if ($send == "cancel")
	{
		echo "<script>setTimeout(function(){window.location.href='shop-cart.php';}, 1); 
			</script>";
		exit();
	}
	elseif($send == "send")
	{
        $e_c = get_safe_post($mysqlicheck,"e_c");
		$f_c = get_safe_post($mysqlicheck,"f_c");
		$u_c = get_safe_post($mysqlicheck,"u_c");
		$ca_c = get_safe_post($mysqlicheck,"ca_c");
		$ci_c = get_safe_post($mysqlicheck,"ci_c");
		$ad1_e = get_safe_post($mysqlicheck,"ad1_e");
        $ead1_e = get_safe_post($mysqlicheck,"ead1_e");
        $t1_e = get_safe_post($mysqlicheck,"t1_e");
		$ad2_e = get_safe_pxost($mysqlicheck,"ad2_e");
	    $ead2_e = get_safe_post($mysqlicheck,"ead2_e");
        $t2_e = get_safe_post($mysqlicheck,"t2_e");
        $note = get_safe_post($mysqlicheck,"note");
        
        if($user_id == "")
        {
			
        }
		elseif($user_id != "")
        {
            
            
        }
	}
}
                                
                                
                                
$sel_p = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ");
if ($sel_p->num_rows > 0)
{
	$row_p=mysqli_fetch_assoc($sel_p);
}                              
                               
$e_c = $row_p["user_email"];	   
$u_c = $row_p["user_name"];	
$f_c = $row_p["user_family"];						   
$ca_c = $row_p["user_country"];	
$ci_c = $row_p["user_city"];	
$ad1_e = $row_p["user_address1"];
$t1_e = $row_p["user_tell1"];
$ad2_e = $row_p["user_address2"];
$t2_e = $row_p["user_tell2"];

?>       
                               
                                <!-- BEGIN: BILLING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">مشخصات پروفایل</h3>
                                <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label">نام</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="نام" name="u_c" value="<?php echo $u_c; ?>"   <?php if ($user_id != "") echo "disabled"?>>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">نام خانوادگی</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="نام خانوادگی" name="f_c" value="<?php echo $f_c; ?>"   <?php if ($user_id != "") echo "disabled"?>>
                                </div>
                                <div class="col-md-6">
									<label class="control-label">آدرس ایمیل </label>
									<input type="email" class="form-control c-square c-theme" placeholder=" جهت ورود به سایت و ارسال رمز عبور شما" name="e_c" value="<?php echo $e_c; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
                            </div>
                        </div>
                        <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">استان </label>
									<input type="text" class="form-control c-square c-theme" placeholder="استان" name="ca_c" value="<?php echo $ca_c; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
								<div class="col-md-6">
									<label class="control-label">شهر </label>
									<input type="text" class="form-control c-square c-theme" placeholder="شهر" name="ci_c" value="<?php echo $ci_c; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
							</div>
				       </div>
                               <h3 class="c-font-bold c-font-uppercase c-font-24">آدرس قبض</h3>
                         <div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="آدرس" name="ad1_e" value="<?php echo $ad1_e; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
						   </div>
						</div>
					<div class="form-group">
							<div class="row">
								<div class="col-md-6" >
									<label class="control-label">ادامه آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="ادامه آدرس" name="ead1_e" value="<?php echo $ead1_e; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
								<div class="col-md-6" >
									<label class="control-label">تلفن </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="t1_e" value="<?php echo $t_e; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
							</div>
				       </div>   <?php if ($user_id == "") { ?>
                                <div class="row c-margin-t-15">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox c-toggle-hide">
                                            <input type="checkbox" id="checkbox1-77" class="c-check" name="new_c">
                                            <label for="checkbox1-77">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> ایجاد یک حساب کاربری ؟ </label>
                                        </div>
                                        <p class="help-block">با وارد نمودن اطلاعات بالا و انتخاب (ایجاد یک حساب کاربری ؟) یک حساب کاربری برای خود ایجاد نمائید .<br />اگر شما مشتری گذشته هستید لطفاً  وارد سیستم شوید .</p>
                                    </div>
                                </div>
                                <?php  }?>
                                <!-- BILLING ADDRESS -->
                                <!-- SHIPPING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">آدرس ارسال</h3>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox-inline">
                                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-shipping-address" data-animation-speed="600">
                                                <input type="checkbox" id="checkbox6-444" class="c-check" name="new_s">
                                                <label for="checkbox6-444">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> آدرس ارسال تفاوت دارد ؟ </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-shipping-address">
                       <div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="آدرس" name="ad2_e" value="<?php echo $ad2_e; ?>">
								</div>
						   </div>
						</div>
					<div class="form-group">
							<div class="row">
								<div class="col-md-6" >
									<label class="control-label">ادامه آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="ادامه آدرس" name="ead2_e" value="<?php echo $ead2_e; ?>">
								</div>
								<div class="col-md-6" >
									<label class="control-label">تلفن </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="t2_e" value="<?php echo $t2_e; ?>">
								</div>
							</div>
				       </div>
                                </div>
                                <!-- SHIPPING ADDRESS -->
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">یادداشت برای سفارش شما</label>
                                        <textarea class="form-control c-square c-theme" rows="3" placeholder="در مورد سفارش خود توجه داشته باشید ، به عنوان مثال، یادداشت ویژه برای تحویل." name="note"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- END: ADDRESS FORM -->
                            <!-- BEGIN: ORDER FORM -->
                            <div class="col-md-5">
                                <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                                    <h1 class="c-font-bold c-font-uppercase c-font-24">سفارش شما</h1>
                                    <ul class="c-order list-unstyled">
                                        <li class="row c-margin-b-15">
                                            <div class="col-md-6 c-font-20">
                                                <h2>محصول</h2>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <h2>جمع</h2>
                                            </div>
                                        </li>
                                        <li class="row c-border-bottom"></li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <a href="shop-product-details.html" class="c-theme-link">1x Winter Coat</a>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class=""> 2000 ريال</p>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <a href="shop-product-details-2.html" class="c-theme-link">Sports Wear x 1</a>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">50000 ريال</p>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">جمع جزء</div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">
                                                   <span class="c-subtotal">61.98</span> ريال
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row c-border-top c-margin-b-15"></li>
                                        <li class="row">
                                            <div class="col-md-6 c-font-20">حمل</div>
                                            <div class="col-md-6">
                                                <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                                    <div class="c-radio">
                                                        <input type="radio" value="20" id="radio11" class="c-radio" name="shipping_price" checked="">
                                                        <label for="radio11">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>پیشتاز  </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">80000 ريال</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" value="10" id="radio12" class="c-radio" name="shipping_price">
                                                        <label for="radio12">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> تحویل در محل </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">50000 ريال</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" value="0" id="radio13" class="c-radio" name="shipping_price">
                                                        <label for="radio13">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>ارسال عادی </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-5 c-font-20">
                                                <p class="c-font-30">جمع کل :</p>
                                            </div>
                                            <div class="col-md-7 c-font-20">
                                                <p class="c-font-bold c-font-30">
                                                    <span class="c-shipping-total">28900000</span> ريال
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-12">
                                                <div class="c-radio-list">
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio1" class="c-radio" name="payment" checked="">
                                                        <label for="radio1" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Direct Bank Transfer </label>
                                                        <p class="help-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio2" class="c-radio" name="payment">
                                                        <label for="radio2" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Cheque Payment </label>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio3" class="c-radio" name="payment">
                                                        <label for="radio3" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Paypal </label>
                                                        </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="form-group col-md-12">
                                                <div class="c-checkbox">
                                                    <input type="checkbox" id="checkbox1-11" class="c-check">
                                                    <label for="checkbox1-11">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>من مقررات را خوانده ام و این شرایط را قبول دارم </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="form-group col-md-12" role="group">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="send">ارسال</button>
                                                <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold" name="send" value="cancel">صرفنظر</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END: ORDER FORM -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
