
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
			<div class="container">
                
                   <?php require_once "profile.php"; ?>
                   
                   <div class="c-layout-sidebar-content ">
                   
           <?php 
if (isset($_POST["send"]))
{
	$send = get_safe_post($mysqlicheck,"send");
	$nu = get_safe_post($mysqlicheck,"nu");
	if ($nu == 1) $type = 'قبض'; elseif ($nu == 2) $type = 'ارسال' ;
	if ($send == "edit")
	{
		
		
		$ad_e = $row_p["user_address$nu"];
		$t_e = $row_p["user_tell$nu"];
	}
	elseif($send == "e_ad_t")
	{
		$ad_e = get_safe_post($mysqlicheck,"ad_e");
		$t_e = get_safe_post($mysqlicheck,"t_e");
		$u_a = 'user_address'.$nu;
		$u_t = 'user_tell'.$nu;
		if ($ad_e == "" || $t_e == "" )
		{
				echo  '<div class="alert alert-warning" role="alert">پر کردن هر دو فیلد الزامیست  . </div>';
		}
		elseif($ad_e != "" && $t_e != "" )
		{
				$s_ch1 = 'UPDATE user SET '.$u_a.' = "'.$ad_e.'", '.$u_t.' = '.$t_e.' WHERE user_id = '.$user_id;
				$r_ch1 = $mysqlicheck->query($s_ch1);
				if (!$r_ch1)
				{
					echo '<div class="alert alert-danger" role="alert">ثبت اطلاعات با خطا مواجه گردید . </div>';
				}
				else
				{
					echo '<div class="alert alert-success" role="alert">ویرایش آدرس '.$type.' شما با موفقیت صورت پذیرفت .</div>';
					echo "<script>setTimeout(function(){window.location.href='shop-customer-addresses.php';}, 2000); 
									  </script>";
				}
		}
	}
	elseif($send == "cancel")
	{
		echo "<script>setTimeout(function(){window.location.href='shop-customer-addresses.php';}, 1); 
			</script>";
		exit();
	}
}
           ?>       
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">ویرایش آدرس <?php  echo $type ; ?> </h3>
                        <div class="c-line-left"></div>
                    </div>
                    
                    <?php echo '<p style="text-align:justify;">کاربر گرامی استان شما: <span class="c-theme-font">'.$row_p["user_country"].'</span> و شهر شما: <span class="c-theme-font">'.	
$row_p["user_city"].'</span> می باشد.<br /> در صورتی که نیاز به تغییر دارد از قسمت <a href="shop-customer-profile.php">ویرایش پروفایل</a> اقدام نمائید. </p>';?>
                    <form class="c-shop-form-1" method="post" >
                       <div class="form-group">
							<div class="row">
								<div class="col-md-9">
									<label class="control-label">آدرس </label>
									<input type="text" class="form-control c-square c-theme" placeholder="آدرس" name="ad_e" value="<?php echo $ad_e; ?>">
								</div>
								<div class="col-md-3" >
									<label class="control-label">تلفن </label>
									<input type="text" class="form-control c-square c-theme" placeholder="تلفن" name="t_e" value="<?php echo $t_e; ?>">
								</div>
							</div>
				       </div>
				       <input type="hidden" value="<?php echo $nu; ?>" name="nu"> 
				      <div class="row c-margin-t-30">
                          <div class="form-group col-md-12" role="group">
                              <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="e_ad_t">ارسال</button>
                              <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold" id="cancel" name="send" value="cancel">صرف نظر</button>
                         </div>
                       </div>
                    </form>
                 </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       