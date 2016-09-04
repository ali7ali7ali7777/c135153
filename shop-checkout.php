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

$sel_p = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ");
if ($sel_p->num_rows > 0)
{
	$row_p=mysqli_fetch_assoc($sel_p);
}                              
                               

$ad1_c = $row_p["user_address1"];

$ad2_c = $row_p["user_address2"];

$note = get_safe_post($mysqlicheck,"note");

								
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
        $ad2_c = get_safe_post($mysqlicheck,"ad2_c");
	    $new_c = get_safe_post($mysqlicheck,"new_c");
		$new_s = get_safe_post($mysqlicheck,"new_s");
		
		if($user_id == "")
        {
			$e_c = get_safe_post($mysqlicheck,"e_c");
			$f_c = get_safe_post($mysqlicheck,"f_c");
			$u_c = get_safe_post($mysqlicheck,"u_c");
			$ca_c = get_safe_post($mysqlicheck,"ca_c");
			$ci_c = get_safe_post($mysqlicheck,"ci_c");
			$ad1_c = get_safe_post($mysqlicheck,"ad1_c");
			$t1_c = get_safe_post($mysqlicheck,"t1_c");
			$m_c = get_safe_post($mysqlicheck,"m_c");
			$t2_c = get_safe_post($mysqlicheck,"t2_c");
			$p_c = createRandomPassword();
			
			if ($new_c == 'yes' && $e_c!="" && $f_c!="" && $u_c!="" && $ad1_c!="" && $ca_c!="" && $ci_c!="" && $m_c!="" )
			{
				$result_c = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_email` = '".$e_c."'");
				if ($result_c->num_rows > 0)
				{
					echo  '<div class="alert alert-warning" role="alert">کاربری با این ایمیل قبلاً ثبت شده است . </div>';
				}
				else
				{
					$sql_c = 'INSERT INTO `user`(`user_name`, `user_family`, `user_email`, `user_pass`, `user_type`, `user_tell1`, `user_address1`,  `user_city`, `user_country`, `user_tell2` , `user_mobile`, `user_address2`) VALUES ("'.$u_c.'","'.$f_c.'","'.$e_c.'","'.md5($p_c).'", 2 ,"'.$t1_c.'","'.$ad1_c.'","'.$ci_c.'","'.$ca_c.'","'.$t2_c.'","'.$m_c.'","'.$ad2_c.'")';
					$result_c1 = $mysqlicheck->query($sql_c);
                    if (!$result_c1)
					{
						echo '<div class="alert alert-danger" role="alert">ثبت اطلاعات با خطا مواجه گردید . </div>';	
					}
					else
					{
						$to = $e_c ;
						$subject = 'ثبت نام شما کامل شد - رمز عبور ';
						/* Let's Prepare The Message For The E-mail */
						$message = "سلام  \n\n" .$u_c." ".$f_c." \n\n
						ایمیل و پسورد شما به شرح زیر است :
						ایمیل : ".$e_c."\n
						پسورد شما : ".$p_c."\n\n
						شما می توانید با ایمیل و پسورد بالا وارد شوید ." ;
						/* Send The Message Using mail() Function */
						if(mail($to, $subject, $message ))
						{
							echo '<div class="alert alert-success" role="alert">'.$u_c.' '.$f_c.' عزیز ثبت نام شما با موفقیت صورت پذیرفت و رمز عبور شما به ایمیل '.$e_c.' ارسال گردید . پس از مشاهده رمز عبور خود وارد سامانه شده و ادامه خرید خود را انجام دهید . </div>';
							echo "<script>setTimeout(function(){window.location.href='login.php';}, 5000); 
							  </script>";
						}
						else
						{
							echo '<div class="alert alert-info" role="alert">'.$u_c.' '.$f_c.' عزیز ثبت نام شما با موفقیت صورت پذیرفت ولی هنگام ارسال رمز عبور به ایمیل '.$e_c.' خطایی رخ داده است از صفحه <a href="page-about.php"><span class="c-theme-font">ارتباط با ما </span></a> مشکل خود را مطرح نمایید تا پیگیری شود .</div>';
						}
					}
				}
			}
			else
			{
				echo '<div class="alert alert-warning" role="alert">جهت ثبت نام تیک (ایجاد یک حساب کاربری ؟ ) را زده و فیلدهای بالای آنرا پر نمائید . تلفن می تواند خالی باشد .</div>';
			}
        }
		elseif($user_id != "")
        {
			if($new_s == 'yes' && $ad2_c != '')
			{
				$sql_f = 'UPDATE user SET user_address2 = "'.$ad2_c.'" WHERE user_id = "'.$user_id.'"';
				$result_f = $mysqlicheck->query($sql_f);
				if(!$result_f)
				{
					echo '<div class="alert alert-danger" role="alert">بروز رسانی آدرس با خطا مواجه گردید . </div>';
				}
				else
				{
					echo '<div class="alert alert-success" role="alert">آدرس ارسال شما با موفقیت بروز رسانی گردید .</div>';
				}
			}
			else
			{
				echo '<div class="alert alert-warning" role="alert"> در صورتی که آدرس ارسال شما تفاوت دارد تیک (آدرس ارسال تفاوت دارد؟) را زده فیلد را پر نمائید . در غیر این صورت بر روی نهایی نمودن خرید کلیک نمائید .</div>';
			}
        }
	}
	elseif($send == "end_s" && $user_id != "")
	{
		$gh_sh = get_safe_post($mysqlicheck,"gh_sh");
		if ($gh_sh == "yes")
		{
			$result7 = mysqli_query($mysqlicheck,"SELECT MAX(object_out_factor) FROM object_out "); 
			$max2=mysqli_fetch_row($result7);
			if (!$max2[0])
				$o_o_f = 1000 ;
			else
				$o_o_f = $max2[0] + 1 ;
			
			if ($note == "")
				$note = 'یادداشت ویژه ای ثبت نشد';
			
			$se_s = get_safe_post($mysqlicheck,"shipping_price");
			$pm_s = get_safe_post($mysqlicheck,"payment"); 
			
			if ($se_s == 0)
				$h_send = 2 ;
			elseif ($se_s == 50000)
				$h_send = 3 ;
			elseif ($se_s == 80000)
				$h_send = 4 ;
			
		//	if ('پرداخت اوکی شد ')
		//	{
				foreach ($_SESSION["cart_item"] as $c_item)
				{
					$sql_en = 'INSERT INTO `object_out`(`object_out_factor`, `object_out_person_id`, `object_out_code`, `object_out_qun`, `object_out_sales_price`, `object_out_status`, `object_out_type`, `object_out_preamble`, `object_out_date`, `object_out_time`, `object_out_ip`, `object_out_h_s`, `object_out_payment`) VALUES ("'.$o_o_f.'" ,"'.$user_id.'", "'.$c_item["code"].'", "'.$c_item["quantity"].'", "'.$c_item["price"].'", 2, 2, "'.$note.'", "'.$date.'", "'.$time.'", "'.$user_ip.'", "'.$h_send.'", "'.$pm_s.'")';
					$res_en = $mysqlicheck->query($sql_en);
				}
				if($res_en)
				{
					$_SESSION["check"] = $o_o_f ;
					unset($_SESSION["cart_item"]);
					echo "<script>window.location.href='shop-checkout-complete.php';</script>";
				}
				else
				{
					echo '<div class="alert alert-danger" role="alert">ثبت فاکتور با خطا مواجه گردید . </div>';
				}
		/*	}
			else
			{
				echo '<div class="alert alert-danger" role="alert">پرداخت با خطا مواجه گردید . </div>';
			}*/
		}
		else
		{
			echo '<div class="alert alert-warning" role="alert">جهت نهایی شدن سفارش ، شرایط را نپذیرفته اید .</div>';
		}
	}
	else
	{
		echo '<div class="alert alert-warning" role="alert">قبل از نهایی شدن سفارش، در صورتی که قبلاً ثبت نام نموده اید وارد سامانه شوید و یا ثبت نام نمائید . <a href="login.php"><span class="c-theme-font">ورود به سامانه </span></a></div>';
	}
}

                                
function createRandomPassword($length = 8) {
		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
		$max = strlen($chars) - 1;

		$pass = '' ;
		for ($i = 0; $i < $length; ++$i) {
			$pass .= $chars[mt_rand(0, $max)];
		}
		return $pass;
	}                                 
?>       
                               <?php if ($user_id == "") { ?>
                                <!-- BEGIN: BILLING ADDRESS -->
                                <h3 class="c-font-bold c-font-uppercase c-font-24">مشخصات پروفایل</h3>
                                <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">نام</label>
                                                        <input type="text" class="form-control c-square c-theme" placeholder="نام" name="u_c" value="<?php echo $u_c; ?>"> </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">نام خانوادگی</label>
                                                        <input type="text" class="form-control c-square c-theme" placeholder="نام خانوادگی" name="f_c" value="<?php echo $f_c; ?>"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
												<div class="row">
													<div class="form-group col-md-6">
														<label class="control-label">آدرس ایمیل </label>
														<input type="email" class="form-control c-square c-theme" placeholder=" جهت ورود به سایت و ارسال رمز عبور شما" name="e_c" value="<?php echo $e_c; ?>"> </div>
													<div class="col-md-6">
														<label class="control-label">موبایل</label>
														<input type="tel" class="form-control c-square c-theme" placeholder="موبایل" name="m_c" value="<?php echo $m_c; ?>"> </div>
												</div>
											</div>
                                           <div class="form-group">
												<div class="row">
													<div class="col-md-6">
														<label class="control-label">تلفن 1</label>
														<input type="tel" class="form-control c-square c-theme" placeholder="تلفن یک" name="t1_c" value="<?php echo $t1_c; ?>">
													</div>
													<div class="col-md-6">
														<label class="control-label">تلفن 2</label>
														<input type="tel" class="form-control c-square c-theme" placeholder="تلفن دو یا فکس" name="t2_c" value="<?php echo $t2_c; ?>">
													</div>
												</div>
											</div>
                        <div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label class="control-label">استان </label>
									<input type="text" class="form-control c-square c-theme" placeholder="استان" name="ca_c" value="<?php echo $ca_c; ?>"  >
								</div>
								<div class="col-md-6">
									<label class="control-label">شهر </label>
									<input type="text" class="form-control c-square c-theme" placeholder="شهر" name="ci_c" value="<?php echo $ci_c; ?>"  >
								</div>
							</div>
				       </div>
                           <?php  }?>
                                  
                               <h3 class="c-font-bold c-font-uppercase c-font-24">آدرس قبض</h3>
                      <div class="form-group">
							<div class="row">
								<div class="col-md-12" >
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder=" آدرس قبض" name="ad1_c" value="<?php echo $ad1_c; ?>"  <?php if ($user_id != "") echo "disabled"?>>
								</div>
							</div>
				       </div>   <?php if ($user_id == "") { ?>
                                <div class="row c-margin-t-15">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox c-toggle-hide">
                                            <input type="checkbox" id="checkbox1-77" class="c-check" name="new_c" value="yes">
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
                                                <input type="checkbox" id="checkbox6-444" class="c-check" name="new_s" value="yes">
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
								<div class="col-md-12" >
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder=" آدرس ارسال" name="ad2_c" value="<?php echo $ad2_c; ?>">
								</div>
							</div>
				       </div>
                                </div>
                                <!-- SHIPPING ADDRESS -->
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">یادداشت برای سفارش شما</label>
                                        <textarea class="form-control c-square c-theme" rows="3" placeholder="در مورد سفارش خود توجه داشته باشید ، به عنوان مثال، یادداشت ویژه برای تحویل." name="note" ><?php echo $note ;?></textarea>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                               			 <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="send">ارسال</button>
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
                             <?php
							
						if(isset($_SESSION["cart_item"])){
							$item_total = 0;			
							
							foreach ($_SESSION["cart_item"] as $c_item){
							?>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">
                                                <a href="shop-product-details.php?code=<?php echo $c_item["code"]; ?>" class="c-theme-link"><?php echo $c_item["name"]; ?> &times; <?php echo $c_item["quantity"]; ?></a>
                                            </div>
                                            <div class="col-md-6 c-font-20">
                                                <p class=""> <?php echo number_format($c_item["price"]*$c_item["quantity"]) ;  ?> ريال</p>
                                            </div>
                                        </li>
                                <?php
								$item_total += ($c_item["price"]*$c_item["quantity"]) ;
							}
						}
								?>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="col-md-6 c-font-20">جمع جزء</div>
                                            <div class="col-md-6 c-font-20">
                                                <p class="">
                                                   <span class="c-subtotal"><?php echo number_format($item_total);  ?></span> ريال
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row c-border-top c-margin-b-15"></li>
                                        <li class="row">
                                            <div class="col-md-6 c-font-20">حمل</div>
                                            <div class="col-md-6">
                                                <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                                    <div class="c-radio">
                                                        <input type="radio" value="80000" id="radio11" class="c-radio" name="shipping_price" checked="">
                                                        <label for="radio11">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span>پیشتاز  </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">80,000 ريال</p>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" value="50000" id="radio12" class="c-radio" name="shipping_price">
                                                        <label for="radio12">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> تحویل در محل </label>
                                                        <p class="c-shipping-price c-font-bold c-font-20">50,000 ريال</p>
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
                                                    <span class="c-shipping-total"><?php echo number_format($item_total+80000);  ?></span> ريال
                                                </p>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-12">
                                                <div class="c-radio-list">
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio1" class="c-radio" name="payment" checked="" value="1">
                                                        <label for="radio1" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> آپ 
                                                        </label>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio2" class="c-radio" name="payment" value="2">
                                                        <label for="radio2" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> به ملت
                                                        </label>
                                                    </div>
                                                    <div class="c-radio">
                                                        <input type="radio" id="radio3" class="c-radio" name="payment" value="3">
                                                        <label for="radio3" class="c-font-bold c-font-20">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> به سامان 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row c-margin-b-15 c-margin-t-15">
                                            <div class="form-group col-md-12">
                                                <div class="c-checkbox">
                                                    <input type="checkbox" id="checkbox1-11" class="c-check" name="gh_sh" value="yes">
                                                    <label for="checkbox1-11">
                                                        <span class="inc"></span>
                                                        <span class="check"></span>
                                                        <span class="box"></span>من شرایط را خوانده ام و این مقررات را قبول دارم 
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="form-group col-md-12" role="group">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="end_s">نهایی نمودن خرید </button>
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
