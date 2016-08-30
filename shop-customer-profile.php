
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<div class="container">
                
                   <?php require_once "profile.php"; ?>
                   
                   <div class="c-layout-sidebar-content ">
                   
           <?php 
					   
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
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">ویرایش پروفایل</h3>
                        <div class="c-line-left"></div>
                    </div>
                    
                    
                    <form class="c-shop-form-1" method="post" >
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
				       <p>نکته: در صورتی که تمایلی به تغییر رمز عبور خود ندارید می توانید فیلدهای زیر را خالی بگذارید. </p>
					   <div class="form-group">
					    <div class="row">
							<div class="col-md-6">
								<label class="control-label">تغییر رمز عبور</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="رمز عبور" name="p1_c" value="<?php echo $p1_c; ?>">
							</div>
							<div class="col-md-6">
								<label class="control-label">نوشتن دوباره رمز عبور</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="تکرار رمز عبور" name="p2_c" value="<?php echo $p2_c; ?>">
                            </div>
                        </div>
                        	<p>
                        	نکته: رمز عبور باید حداقل شش کاراکتر باشد.
                        	<br /> با استفاده از حروف کوچک ، حروف بزرگ ، اعداد و کاراکترهای خاص مانند ! " ? $ % ^ & ) کلمه عبور خود را قویتر نمایید.
                       		</p>
				       </div>
                       <div class="row c-margin-t-30">
                          <div class="form-group col-md-12" role="group">
                              <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="change">ارسال</button>
                              <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold" id="cancel" name="send" value="cancel">صرف نظر</button>
                         </div>
                       </div>
                    </form>
                 </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       