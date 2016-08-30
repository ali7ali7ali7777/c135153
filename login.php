

        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
<?php
if (isset($_POST['send']) ){
$send = get_safe_post($mysqlicheck,"send");
if(!empty($send))
{
	switch($send)
	{
		case "forget":
			$f_e = get_safe_post($mysqlicheck,"f_e");
			if ($f_e != "")
			{
				$result_f = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_email` = '".$f_e."'");
				if ($result_f->num_rows > 0)
				{
					$p_f = createRandomPassword(); 
					$sql_f = mysqli_query($mysqlicheck,'UPDATE `user` SET `user_pass`= "'.md5($p_f).'" WHERE `user_email` = "'.$f_e.'" ');
					$result_f = $mysqlicheck->query($sql_f);
                    if (!$result_f)
					{
						$mas_f = 3;	
					}
					else
					{
						$to_f = $f_e ;
						$subject_f = 'رمز عبور جدید';
						/* Let's Prepare The Message For The E-mail */
						$message_f = "سلام  \n\n 
						ایمیل و پسورد جدید شما به شرح زیر است :
						ایمیل : ".$f_e."\n
						پسورد شما : ".$p_f."\n\n
						شما می توانید با ایمیل و پسورد بالا وارد شوید ." ;
						/* Send The Message Using mail() Function */
						if(mail($to_f, $subject_f, $message_f ))
						{
							$mas_f = 4;
							echo "<script>
								setTimeout(function(){
									window.location.href='login.php'; 
								}, 3000); 
							</script>";
						}
						else
						{
							$mas_f = 5;
						}
					}
				}
				else
				{
					$mas_f = 2 ;
				}
			}
			else
			{
				$mas_f = 1 ;
			}
		break;
		case "create":
			$e_c = get_safe_post($mysqlicheck,"e_c");
			$f_c = get_safe_post($mysqlicheck,"f_c");
			$p_c = createRandomPassword(); 
			$u_c = get_safe_post($mysqlicheck,"u_c");
			$ad1_c = get_safe_post($mysqlicheck,"ad1_c");
			$ad2_c = get_safe_post($mysqlicheck,"ad2_c");
			$ca_c = get_safe_post($mysqlicheck,"ca_c");
			$ci_c = get_safe_post($mysqlicheck,"ci_c");
			$t_c = get_safe_post($mysqlicheck,"t_c");
			$ad_c = $ad1_c." ".$ad2_c;
			if ($e_c!=""&&$f_c!=""&&$u_c!=""&&$ad1_c!=""&&$ad2_c!=""&&$ca_c!=""&&$ci_c!=""&&$t_c!="" )
			{
				$result_c = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_email` = '".$e_c."'");
				if ($result_c->num_rows > 0)
				{
					$mas_c = 2;
				}
				else
				{
					$sql_c = 'INSERT INTO `user`(`user_name`, `user_family`, `user_email`, `user_pass`, `user_type`, `user_tell1`, `user_address1`,  `user_city`, `user_country`) VALUES ("'.$u_c.'","'.$f_c.'","'.$e_c.'","'.md5($p_c).'", 2 ,"'.$t_c.'","'.$ad_c.'","'.$ci_c.'","'.$ca_c.'")';
					$result_c1 = $mysqlicheck->query($sql_c);
                    if (!$result_c1)
					{
						$mas_c = 3;	
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
							$mas_c = 4;
						}
						else
						{
							$mas_c = 5;
						}
						echo "<script>setTimeout(function(){window.location.href='login.php';}, 5000); 
							  </script>";
					}
				}
			}
			else
			{
				$mas_c = 1;
			}
		break;
		case "login":
			$e_v = get_safe_post($mysqlicheck,"e_v");
			$p_v = get_safe_post($mysqlicheck,"p_v");
			if ($e_v != "" || $p_v != "")
			{
				$sel_l = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_pass` ='".md5($p_v)."' and `user_email` = '".$e_v."'");
				if ($sel_l->num_rows > 0)
				{
					$row_l=mysqli_fetch_assoc($sel_l);
					session_start();
					if ($row_l["user_type"] == 2)
					{
						$type = "user" ;
					}
					else if ($row_l["user_type"] == 1)
					{
						$type = "modir";
					}
					
					$user = array('type'=> $type , 'id' => $row_l["user_id"] , 'name' => $row_l["user_name"].' '.$row_l["user_family"]);
					$_SESSION["login"] = $user;
					$mas_l = 2 ;
					echo "<script>
						setTimeout(function(){
							window.location.href='index.php'; 
						}, 4000); 
						</script>";
				}
				else
				{
					$mas_l = 3 ;
				}
			}
			else
			{
				$mas_l = 1 ;
			}
		break;
		case "out":
			unset($_SESSION["login"]);
		break;
	}
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
          
           <!-- BEGIN: PAGE CONTENT -->
            <div class="container" >
				<div class="row">
					<div class="col-md-12">
						<h3 class="c-font-24 c-font-sbold" style="text-align: center;">وقت بخیر !</h3>
						<p style="text-align: center;">امروز یک روز عالی بسازید !</p>
						        <?php
			if ($mas_f == 1)
			{
				echo '<div class="alert alert-warning" role="alert">ایمیل خود را وارد نکرده اید .</div>';	
			}
			else if ($mas_f == 2)
			{
				echo  '<div class="alert alert-warning" role="alert">کاربری با ایمیل '.$f_e.' ثبت نشده است . </div>';
			}
			else if ($mas_f == 3)
			{
				echo '<div class="alert alert-danger" role="alert">ارسل رمز عبور با خطا مواجه گردید . </div>';
			}
			else if ($mas_f == 4)
			{
				echo '<div class="alert alert-success" role="alert">رمز عبور جدید شما به ایمیل '.$f_e.' با موفقیت ارسال گردید .</div>';
			}
			else if ($mas_f == 5)
			{
				echo '<div class="alert alert-info" role="alert"> کاربر گرامی رمز عبور شما تغییر یافت ولی هنگام ارسال رمز عبور جدید به ایمیل '.$f_e.' خطایی رخ داده است از صفحه <a href="page-contact.php">ارتباط با ما </a> مشکل خود را مطرح نمایید تا پیگیری شود .</div>';
			}
			if ($mas_c == 1)
			{
				echo '<div class="alert alert-warning" role="alert">پر کردن همه فیلدها الزامیست .</div>';	
			}
			else if ($mas_c == 2)
			{
				echo  '<div class="alert alert-warning" role="alert">کاربری با این ایمیل قبلاً ثبت شده است . </div>';
			}
			else if ($mas_c == 3)
			{
				echo '<div class="alert alert-danger" role="alert">ثبت اطلاعات با خطا مواجه گردید . </div>';
			}
			else if ($mas_c == 4)
			{
				echo '<div class="alert alert-success" role="alert">'.$u_c.' '.$f_c.' عزیز ثبت نام شما با موفقیت صورت پذیرفت و رمز عبور شما به ایمیل '.$e_c.' ارسال گردید .</div>';
			}
			else if ($mas_c == 5)
			{
				echo '<div class="alert alert-info" role="alert">'.$u_c.' '.$f_c.' عزیز ثبت نام شما با موفقیت صورت پذیرفت ولی هنگام ارسال رمز عبور به ایمیل '.$e_c.' خطایی رخ داده است از صفحه <a href="page-contact.php">ارتباط با ما </a> مشکل خود را مطرح نمایید تا پیگیری شود .</div>';
			}
			if ($mas_l == 1)
			{
				echo '<div class="alert alert-warning" role="alert">پر کردن همه فیلدها الزامیست .</div>';
			}
			else if ($mas_l == 2)
			{
				echo  '<div class="alert alert-success" role="alert">خوش آمدید '.$row_l["user_name"].' '. $row_l["user_family"].' عزیز ، شما هم اکنون به صفحه نخست انتقال می یابید .</div>';
			}
			else if ($mas_l == 3)
			{
				echo '<div class="alert alert-warning" role="alert">کاربری با این مشخصات وجود ندارد . </div>';
			}
			if (isset($_GET['o']))
			{
				echo '<div class="alert alert-success" role="alert">خروج شما با موفقیت صورت پذیرفت .</div>';
				echo "<script>
					setTimeout(function(){
						window.location.href='login.php'; 
					}, 3000); 
					</script>";
			}
			?>
           
					</div> 
				</div>   
			</div>
            
            <!-- BEGIN: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <div class="c-content-box c-size-md c-bg-white">
              <div class="container">
                    <div class="c-shop-login-register-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <form class="c-form-login" method="post">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control c-square c-theme input-lg" placeholder=" ایمیل یا نام کاربری" name="e_v" value="<?php echo $e_v; ?>">
                                                <span class="glyphicon glyphicon-user form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control c-square c-theme input-lg" placeholder="پسورد" name="p_v" value="<?php echo $p_v; ?>">
                                                <span class="glyphicon glyphicon-lock form-control-feedback c-font-grey"></span>
                                            </div>
                                            <div class="row c-margin-t-20">
                                                <div class="col-xs-8">
                                                    <div class="c-checkbox">
                                                        <input type="checkbox" id="checkbox1-77" class="c-check" name="co_mem">
                                                        <label for="checkbox1-77">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> مرا به خاطر بسپار </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4">
                                                    <button type="submit" class="pull-left btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="login">ورود</button>
                                                </div>
                                            </div>
                                            <div class="row c-margin-fix">
                                            	<div class="col-xs-12">
                                                	 <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">رمز عبور خود را فراموش نموده اید ؟</a>
												</div>
											</div>   
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
							<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
							  <div class="modal-dialog">
								<div class="modal-content c-square">
								  <div class="modal-header c-no-border">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  </div>
								  <div class="modal-body">
									<h3 class="c-font-24 c-font-sbold">بازیابی رمز عبور</h3>
									<p>برای بازیابی رمز عبور آدرس ایمیل خود را وارد نمائید .</p>
									<form method="post">
									  <div class="form-group">
										<label for="forget-email" class="hide">ایمیل</label>
										<input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="ایمیل" name="f_e">
									  </div>
									  <div class="form-group">
										<button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="send" value="forget" > ارسال </button>
									  </div>
									</form>
								  </div>
							   </div>
							  </div>
							</div>
							<div class="col-md-6">
                                <div class="panel panel-default c-panel">
                                    <div class="panel-body c-panel-body">
                                        <div class="c-content-title-1">
                                            <h3 class="c-left">
                                                <i class="icon-user"></i> حساب کاربری ندارید ؟</h3>
                                            <div class="c-line-right c-theme-bg"></div>
                                            <p>به ما بپیوندید و از خرید آنلاین لذت ببرید.</p>
                                        </div>
                                        <div class="c-margin-fix">
                                            <div class="c-checkbox c-toggle-hide" data-object-selector="c-form-register" data-animation-speed="600">
                                                <input type="checkbox" id="checkbox6-444" class="c-check">
                                                <label for="checkbox6-444">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> ثبت نام جدید! </label>
                                            </div>
                                        </div>
                                        <form class="c-form-register c-margin-t-20" method="post">
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
														<label class="control-label">تلفن</label>
														<input type="tel" class="form-control c-square c-theme" placeholder="تلفن" name="t_c" value="<?php echo $t_c; ?>"> </div>
												</div>
											</div>
                                            <div class="form-group">
                                                <label class="control-label">آدرس</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="خیابان" name="ad1_c" value="<?php echo $ad1_c; ?>"> </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control c-square c-theme" placeholder="کوچه ، پلاک ، واحد و پلاک" name="ad2_c" value="<?php echo $ad2_c; ?>"> </div>
                                            <div class="form-group">
												<div class="row">
													<div class="form-group col-md-6">
														<label class="control-label">استان </label>
														<input type="text" class="form-control c-square c-theme" placeholder="استان" name="ca_c" value="<?php echo $ca_c; ?>">
												   </div>
													<div class="col-md-6">
														<label class="control-label">شهر </label>
														<input type="text" class="form-control c-square c-theme" placeholder="شهر" name="ci_c" value="<?php echo $ci_c; ?>"> </div>
												</div>
											</div>
                                            <div class="form-group c-margin-t-40">
                                                <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="create">ثبت نام</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="list-unstyled c-bs-grid-small-space">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-twitter">
                                                <i class="fa fa-twitter"></i> Sign in with Twitter </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-facebook">
                                                <i class="fa fa-facebook"></i> Sign in with Facebook </a>
                                        </div>
                                        <div class="col-md-4 col-sm-4 c-margin-t-10">
                                            <a class="btn btn-block btn-social c-btn-square c-btn-uppercase btn-md btn-google">
                                                <i class="fa fa-google-plus"></i> Sign in with Google </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-LOGIN-REGISTER-1 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       