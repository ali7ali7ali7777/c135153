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
    

	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/layout_fixed_custom.js"></script>

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
					$tel_1 	= $_POST['tel_1'];
					$tel_2 	= $_POST['tel_2'];
					$mobile = $_POST['mobile'];
					$fax	= $_POST['fax'];
					$mac	= $_POST['mac'];
					$email	= $_POST['email'];
					$kod	= $_POST['kod'];
					$field	= $_POST['field'];
					
					
					$sql="UPDATE contact SET tel_1='$tel_1', mobile='$mobile',  tel_2='$tel_2', email='$email', kod='$kod', fax='$fax', field='$field' , mac='$mac' WHERE cont_id=1 ";
					$result = $mysqlicheck->query($sql);
					if (!$result)
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
				$show=mysqli_fetch_assoc(mysqli_query($mysqlicheck,"SELECT * FROM contact"));
			?>
            <div class="content">
                  <div class="panel panel-flat">
                  	<form method="post" class="form-horizontal">
                		 <div class="panel-heading" style="margin-top:20px">
                            <h5 class="panel-title">ارتباط با ما</h5>
                             <div class="heading-elements">
                                 <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                  </ul>
                              </div>
                           </div>
                           <hr>
                           <div class="panel-body">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">تلفن یک :</label>
                                        <div class="col-lg-9">
                                            <input type="tel" name="tel_1" class="form-control" placeholder="تلفن یک" value="<?php echo $show['tel_1'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">تلفن دو :</label>
                                        <div class="col-lg-9">
                                            <input type="tel" name="tel_2" class="form-control" placeholder="تلفن دو" value="<?php echo $show['tel_2'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">کد شهر :</label>
                                        <div class="col-lg-9">
                                            <input type="tel" name="kod" class="form-control" placeholder="کد شهر" value="<?php echo '0'.$show['kod'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">آدرس :</label>
                                        <div class="col-lg-9">
                                            <textarea rows="3" cols="5" class="form-control elastic" placeholder="آدرس" name="mac"><?php echo $show['mac'] ?></textarea>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                        			<div class="form-group">
                                        <label class="col-lg-3 control-label">فکس :</label>
                                        <div class="col-lg-9">
                                            <input type="tel" name="fax" class="form-control" placeholder="فکس" value="<?php echo $show['fax'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">موبایل :</label>
                                        <div class="col-lg-9">
                                            <input type="tel" name="mobile" class="form-control" placeholder="موبایل" value="<?php echo '0'.$show['mobile'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">ایمیل :</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email" class="form-control" placeholder="ایمیل" value="<?php echo $show['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">فیلد :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="field" class="form-control" placeholder="فیلد" value="<?php echo $show['field'] ?>">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary">ویرایش و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                     </div>
                                  </div>
                       		   </div>
                           </div>
                        </form>
                        
                   </div> 
				</div>
			</div>

		</div>

	</div>

</body>
</html>