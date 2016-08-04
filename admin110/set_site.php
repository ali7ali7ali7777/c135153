<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>پنل ادمین</title>
<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/core.css" rel="stylesheet" type="text/css">
<link href="assets/css/components.css" rel="stylesheet" type="text/css">
<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
<link href="assets/css/yekan.css" rel="stylesheet" type="text/css">
<link href="assets/css/main.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	
	<!-- /theme JS files -->
<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
<script type="text/javascript" src="assets/js/core/app.js"></script>
<script type="text/javascript" src="assets/js/layout_fixed_custom.js"></script>
<script type="text/javascript" src="assets/js/pages/site_shop.js"></script>



</head>

<body class="navbar-top">
<?php require_once "menu1.php"; ?>
<div class="page-container">
  <div class="page-content">
    <?php require_once "menu2.php"; ?>
    <div class="content-wrapper">
      <?php
				if(get_safe_post($mysqlicheck,"submit") == "save" )
				{
					$tel_1 	= get_safe_post($mysqlicheck,"tel_1");
					$tel_2 	= get_safe_post($mysqlicheck,"tel_2");
					$mobile = get_safe_post($mysqlicheck,"mobile");
					$fax	= get_safe_post($mysqlicheck,"fax");
					$mac	= get_safe_post($mysqlicheck,"mac");
					$email	= get_safe_post($mysqlicheck,"email");
					$kod	= get_safe_post($mysqlicheck,"kod");
					$field	= get_safe_post($mysqlicheck,"field");
					
					
					$sql_a="UPDATE contact SET tel_1='$tel_1', mobile='$mobile',  tel_2='$tel_2', email='$email', kod='$kod', fax='$fax', field='$field' , mac='$mac' WHERE cont_id=1 ";
					$result_a = $mysqlicheck->query($sql_a);
					if (!$result_a)
					{
						header("location:si_contact.php");
						echo'
						<div class="alert alert-danger alert-styled-left alert-bordered">
										<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
										ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
									</div>';
					}
					else
					{
						echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
								<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
								اطلاعات <span class="text-semibold"> ارتباط با ما </span> با موفقیت ویرایش گردید . 
							</div>';
					}
				}
				$show_a=mysqli_fetch_assoc(mysqli_query($mysqlicheck,"SELECT * FROM contact"));
			?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h6 class="panel-title">تنظیمات سایت</h6>
                <div class="heading-elements">
                  <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                  </ul>
                </div>
                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
              <div class="panel-body">
                <div class="tabbable">
                  <ul class="nav nav-tabs bg-teal-400 nav-justified">
                    <li class=""><a href="#colored-justified-tab1" data-toggle="tab" aria-expanded="false">ارتباط با ما</a></li>
                    <li class="active"><a href="#colored-justified-tab2" data-toggle="tab" aria-expanded="true">درباره ما</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">نظرات <span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#colored-justified-tab3" data-toggle="tab">نظرات مستقیم</a></li>
                        <li><a href="#colored-justified-tab4" data-toggle="tab">نظرات کالا</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane" id="colored-justified-tab1">
                      <form method="post" class="form-horizontal">
                        <div class="col-md-6">
                          <div class="col-md-10">
                            <div class="form-group">
                              <label class="col-lg-3 control-label">تلفن یک :</label>
                              <div class="col-lg-9">
                                <input type="tel" id="text-input-methods" disabled="disabled" name="tel_1" class="form-control" placeholder="تلفن یک" value="<?php echo $show_a['tel_1'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">تلفن دو :</label>
                              <div class="col-lg-9">
                                <input type="tel" id="text-input-methods" disabled="disabled" name="tel_2" class="form-control" placeholder="تلفن دو" value="<?php echo $show_a['tel_2'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">کد شهر :</label>
                              <div class="col-lg-9">
                                <input type="tel" id="text-input-methods" disabled="disabled" name="kod" class="form-control" placeholder="کد شهر" value="<?php echo '0'.$show_a['kod'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">آدرس :</label>
                              <div class="col-lg-9">
                                <textarea rows="3" id="text-input-methods" disabled="disabled" cols="5" class="form-control elastic" placeholder="آدرس" name="mac"><?php echo $show_a['mac'] ?></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="col-md-10">
                            <div class="form-group">
                              <label class="col-lg-3 control-label">فکس :</label>
                              <div class="col-lg-9">
                                <input type="tel" id="text-input-methods" disabled="disabled" name="fax" class="form-control" placeholder="فکس" value="<?php echo $show_a['fax'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">موبایل :</label>
                              <div class="col-lg-9">
                                <input type="tel" id="text-input-methods" disabled="disabled" name="mobile" class="form-control" placeholder="موبایل" value="<?php echo '0'.$show_a['mobile'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">ایمیل :</label>
                              <div class="col-lg-9">
                                <input type="email" id="text-input-methods" disabled="disabled" name="email" class="form-control" placeholder="ایمیل" value="<?php echo $show_a['email'] ?>">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-3 control-label">فیلد :</label>
                              <div class="col-lg-9">
                                <input type="text" id="text-input-methods" disabled="disabled" name="field" class="form-control" placeholder="فیلد" value="<?php echo $show_a['field'] ?>">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="panel-default">
                            <div class="panel-body">
                              <div class="text-right">
                              <button type="button" class="btn bg-teal-400" id="btn-contact" value="2">روشن</button>
                                <button type="submit" name="submit" disabled="disabled" value="save" id="text-input-methods" class="btn bg-teal-400">ویرایش و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane active" id="colored-justified-tab2">
                      <form method="post" class="form-horizontal">
                        <div class="col-md-6">
                         
                            <div class="form-group">
                              <label class="col-lg-2 control-label">درباره ما :</label>
                              <div class="col-lg-10">
                                <textarea rows="8" cols="5" class="form-control elastic" placeholder="می توانید درباره خود اینجا بنویسید" name="mac"><?php echo $show['mac'] ?></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">ادامه :</label>
                              <div class="col-lg-10">
                                <textarea rows="8" cols="5" class="form-control elastic" placeholder="ادامه مطالب شما" name="mac"><?php echo $show['mac'] ?></textarea>
                              </div>
                            </div>
                         
                        </div>
                        <div class="col-md-6">
                           
                           <div class="form-group">
                          
										<input type="file" class="file-input-overwrite" data-browse-class="btn bg-teal-400" data-show-remove="false" data-show-caption="false" data-show-upload="false">
										
									
                           
									
                          <div class="text-right">
                              <button type="submit" name="submit" value="save" class="btn bg-teal-400">ویرایش و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                           </div>
                           </div>
                         </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="colored-justified-tab3"> DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever. </div>
                    <div class="tab-pane" id="colored-justified-tab4"> Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>