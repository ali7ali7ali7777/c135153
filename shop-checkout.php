
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<!-- BEGIN: PAGE CONTENT -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    <form class="c-shop-form-1">
                        <div class="row">
                            <!-- BEGIN: ADDRESS FORM -->
                            <div class="col-md-7 c-padding-20">
<?php                              
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
					   
if (isset($_POST['send']))
{
	$send = get_safe_post($mysqlicheck,"send");
	if ($send == "cancel")
	{
		echo "<script>setTimeout(function(){window.location.href='shop-customer-dashboard.php';}, 1); 
			</script>";
		exit();
	}
	elseif($send == "change")
	{
			$e_c = get_safe_post($mysqlicheck,"e_c");
			$f_c = get_safe_post($mysqlicheck,"f_c");
			$u_c = get_safe_post($mysqlicheck,"u_c");
			$ca_c = get_safe_post($mysqlicheck,"ca_c");
			$ci_c = get_safe_post($mysqlicheck,"ci_c");
			$p1_c = get_safe_post($mysqlicheck,"p1_c");
			$p2_c = get_safe_post($mysqlicheck,"p2_c");
		
			if ($e_c != "" && $f_c != "" && $u_c != "" && $ca_c != "" && $ci_c != "")
			{
				if(($p1_c != "" && $p2_c != "" && $p1_c != $p2_c) || ($p1_c == "" && $p2_c != "") || ($p2_c == "" && $p1_c != ""))
				{
					echo  '<div class="alert alert-warning" role="alert">جهت تغییر رمز عبور باید هر دوخانه پر و یکسان باشد . </div>';
				}
				elseif (($p1_c != "" && $p2_c != "" && $p1_c == $p2_c) || ($p1_c == "" && $p2_c == ""))
				{
					if($e_c != $row_p["user_email"])
					{
						$result_c = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_email` = '".$e_c."'");
						if ($result_c->num_rows > 0)
						{
							echo  '<div class="alert alert-warning" role="alert">کاربری با این ایمیل قبلاً ثبت شده است . </div>';
							$che = 1 ;
						}
						else
						{
							$che = 2 ;
						}
					}
					else
					{
						$che = 2 ;
					}
					if($p1_c != "" && $p2_c != "" && $p1_c == $p2_c && $che = 2)
					{
							$s_ch1 = 'UPDATE `user` SET `user_name`="'.$u_c.'",`user_family`="'.$f_c.'",`user_email`="'.$e_c.'",`user_pass`="'.md5($p1_c).'",`user_city`= "'.$ci_c.'",`user_country`="'.$ca_c.'" WHERE `user_id`= "'.$user_id.'"';
							$r_ch1 = $mysqlicheck->query($s_ch1);
							if (!$r_ch1)
							{
								echo '<div class="alert alert-danger" role="alert">ثبت اطلاعات با خطا مواجه گردید . </div>';
							}
							else
							{
								echo '<div class="alert alert-success" role="alert">ویرایش اطلاعات شما و همچنین تغییر پسورد با موفقیت صورت پذیرفت .</div>';
								echo "<script>setTimeout(function(){window.location.href='shop-customer-dashboard.php';}, 3000); 
									  </script>";
							}
						}
						elseif($p1_c == "" && $p2_c == "" && $che = 2)
						{
							$s_ch2 = 'UPDATE `user` SET `user_name`="'.$u_c.'",`user_family`="'.$f_c.'",`user_email`="'.$e_c.'",`user_city`= "'.$ci_c.'",`user_country`="'.$ca_c.'" WHERE `user_id`= "'.$user_id.'"';
							$r_ch2 = $mysqlicheck->query($s_ch2);
							if (!$r_ch2)
							{
								echo '<div class="alert alert-danger" role="alert">ثبت اطلاعات با خطا مواجه گردید . </div>';
							}
							else
							{
								echo '<div class="alert alert-success" role="alert">ویرایش اطلاعات شما با موفقیت صورت پذیرفت .</div>';
								echo "<script>setTimeout(function(){window.location.href='shop-customer-dashboard.php';}, 3000); 
									  </script>";
							}
					}
				}
			}
			else
			{
				echo '<div class="alert alert-warning" role="alert">در صورتی که رمز عبور خود را نمی خواهید تغییر دهید پر نمودن بقیه فیلدها الزامیست .</div>';
			}
	}
}
           ?>       
                               
                                <!-- BEGIN: BILLING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">مشخصات پروفایل</h3>
                                <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <label class="control-label">نام</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="نام" name="u_c" value="<?php echo $u_c; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">نام خانوادگی</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="نام خانوادگی" name="f_c" value="<?php echo $f_c; ?>">
                                </div>
                                <div class="col-md-6">
									<label class="control-label">آدرس ایمیل </label>
									<input type="email" class="form-control c-square c-theme" placeholder=" جهت ورود به سایت و ارسال رمز عبور شما" name="e_c" value="<?php echo $e_c; ?>">
								</div>
                            </div>
                        </div>
                        <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">استان </label>
									<input type="text" class="form-control c-square c-theme" placeholder="استان" name="ca_c" value="<?php echo $ca_c; ?>">
								</div>
								<div class="col-md-6">
									<label class="control-label">شهر </label>
									<input type="text" class="form-control c-square c-theme" placeholder="شهر" name="ci_c" value="<?php echo $ci_c; ?>">
								</div>
							</div>
				       </div>
                               <h3 class="c-font-bold c-font-uppercase c-font-24">آدرس قبض</h3>
                         <div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="آدرس" name="ad1_e" value="<?php echo $ad_e; ?>">
								</div>
						   </div>
						</div>
					<div class="form-group">
							<div class="row">
								<div class="col-md-6" >
									<label class="control-label">ادامه آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="ad2_e" value="<?php echo $t_e; ?>">
								</div>
								<div class="col-md-6" >
									<label class="control-label">تلفن </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="t_e" value="<?php echo $t_e; ?>">
								</div>
							</div>
				       </div>
                                <div class="row c-margin-t-15">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
                                            <input type="checkbox" id="checkbox1-77" class="c-check">
                                            <label for="checkbox1-77">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span> ایجاد یک حساب کاربری ؟ </label>
                                        </div>
                                        <p class="help-block">Create an account by entering the information below. If you are a returning customer please login.</p>
                                    </div>
                                </div>
                                <div class="row c-account">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Account Password</label>
                                        <input type="password" class="form-control c-square c-theme" placeholder="Password"> </div>
                                </div>
                                <!-- BILLING ADDRESS -->
                                <!-- SHIPPING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">آدرس ارسال</h3>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox-inline">
                                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-shipping-address" data-animation-speed="600">
                                                <input type="checkbox" id="checkbox6-444" class="c-check">
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
									<input type="text" class="form-control c-square c-theme" placeholder="آدرس" name="ad1_e" value="<?php echo $ad_e; ?>">
								</div>
						   </div>
						</div>
					<div class="form-group">
							<div class="row">
								<div class="col-md-6" >
									<label class="control-label">ادامه آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="ad2_e" value="<?php echo $t_e; ?>">
								</div>
								<div class="col-md-6" >
									<label class="control-label">تلفن </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="t_e" value="<?php echo $t_e; ?>">
								</div>
							</div>
				       </div>
                                </div>
                                <!-- SHIPPING ADDRESS -->
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Order Notes</label>
                                        <textarea class="form-control c-square c-theme" rows="3" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- END: ADDRESS FORM -->
                            <!-- BEGIN: ORDER FORM -->
                            <div class="col-md-5">
                                <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                                    <h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
                                    <ul class="c-order list-unstyled">
                                        <li class="row c-margin-b-15">
                                            <div class="col-md-6 c-font-20">
                                                <h2>Product</h2>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <h2>Total</h2>
                                            </div>
                                        </li>
                                        <li class="row c-border-bottom"></li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <a href="shop-product-details.html" class="c-theme-link">1x Winter Coat</a>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">$30.99</p>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <a href="shop-product-details-2.html" class="c-theme-link">Sports Wear x 1</a>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">$30.99</p>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">Subtotal</div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">$
                                                    <span class="c-subtotal">61.98</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row c-border-top c-margin-b-15"></li>
                                        <li class="row">
                                            <div class="col-md-6 c-font-20">Shipping</div>
                                            <div class="col-md-6">
                                                <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                                    <div class="c-radio">
                                                        <input type="radio" value="20" id="radio11" class="c-radio" name="shipping_price" checked="">
                                                        <label for="radio11">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Flat Rate </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">$20.00</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" value="10" id="radio12" class="c-radio" name="shipping_price">
                                                        <label for="radio12">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Local Delivery </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">$10.00</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" value="0" id="radio13" class="c-radio" name="shipping_price">
                                                        <label for="radio13">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Local Pickup </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <p class="c-font-30">Total</p>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="c-font-bold c-font-30">$
                                                    <span class="c-shipping-total">81.98</span>
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
                                                        <img class="img-responsive" width="250" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" /> </div>
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
                                                        <span class="box"></span> I’ve read and accept the Terms & Conditions </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="form-group col-md-12" role="group">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                                                <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
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
