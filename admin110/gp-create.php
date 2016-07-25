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
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yekan.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    

	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
	
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>
    <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
            <?php
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"name") != "")
				{
					$sub = $_POST['sub'];
					$name_gp = get_safe_post($mysqlicheck,"name");
					
					$result23 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_name ='$name_gp' AND gro_parent_id ='$sub'");
					
					if ($result23->num_rows > 0) {
						echo '<div class="alert alert-warning alert-styled-left">
										<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
										گروه <span class="text-semibold">'.$name_gp.'</span> قبلا ایجاد شده است .
								    </div>';
					}
					else
					{
                        
                        $sql="INSERT INTO gro (gro_name,gro_parent_id,gro_status) VALUES ('$name_gp','$sub','1')";
						$result = $mysqlicheck->query($sql);
                        $gro_title_id = mysqli_insert_id($mysqlicheck);
						if (!$result) {
                            echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
										</div>';
                            
						}else{
                        $sql2="INSERT INTO gro_title (gro_title_id) VALUES ('$gro_title_id')";
                            $result2 = $mysqlicheck->query($sql2);
                            if (!$result2) {
                                echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
										</div>';
							
                            }else
                                echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
									<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
									گروه <span class="text-semibold">'.$name_gp.'</span> با موفقیت ایجاد گردید . 
								</div>';
						}
					}
					
				}
			?>
				<div class="content">
                   <div class="row">
                	<div class="col-md-6">
                        <form method="post" class="form-horizontal">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ایجاد گروه</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">نام گروه :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" class="form-control" placeholder="نام">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">انتخاب گروه :</label>
                                        <div class="col-lg-9">
                                            <select class="select" name="sub">
                                            	<option value="0">انتخاب گروه اصلی برای این گروه</option>
                                                <?php
												$table = mysqli_query($mysqlicheck,"SELECT * FROM gro");
												while($rows=mysqli_fetch_assoc($table))
												{
													echo '<option value="'.$rows['gro_id'].'">'.$rows['gro_name'].'</option>';
												}
												?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">نکته :</label>
                                        <div class="col-lg-9">
                                            <div class="form-control-static">
                                                <p>چنانچه این گروه ، گروه فرعی میباشد ، نام گروه اصلی آن را مشخص کنید .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">نکته :</label>
                                        <div class="col-lg-9">
                                            <div class="form-control-static">
                                                <p>در صورت عدم انتخاب ، این گروه به عنوان گروه اصلی در نظر گرفته میشود .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary">ایجاد و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">نمونه گروه اصلی و فرعی برای درک بیشتر</h6>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
        
                            <div class="panel-body">
                                <a class="display-block content-group" href="#">
                                    <img alt="" class="img-responsive content-group" src="assets/images/placeholder.jpg">
                                </a>
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
