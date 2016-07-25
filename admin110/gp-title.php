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
    <script type="text/javascript" src="assets/js/main.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
            <?php
                $gro_id = get_safe_post($mysqlicheck,"m");
				
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"m") != "")
				{
                    
                    $m1 = "نام کالا"; 
					$m2 = "مدل"; 
					$m3 = "سازنده"; 
					$m4 = "تعداد";
					$m5 = "تاریخ"; 
					$m6 = "مشخصه 1"; 
					$m7 = "مشخصه 2";
					$m8 = "مشخصه 3";
					$m9 = "مشخصه 4";
					$m10 = "مشخصه 5";
					$m11 = "مشخصه 6";
					$m12 = "مشخصه 7";
					$m13 = "مشخصه 8";
					$m14 = "مشخصه 9";
					$m15 = "مشخصه 10";
                    
                    $m = get_safe_post($mysqlicheck,"m");
                    if(get_safe_post($mysqlicheck,"m1") != "")
                    $m1 = get_safe_post($mysqlicheck,"m1");
                    if(get_safe_post($mysqlicheck,"m2") != "")
					$m2 = get_safe_post($mysqlicheck,"m2");
                    if(get_safe_post($mysqlicheck,"m3") != "")
					$m3 = get_safe_post($mysqlicheck,"m3");
                    if(get_safe_post($mysqlicheck,"m4") != "")
					$m4 = get_safe_post($mysqlicheck,"m4");
                    if(get_safe_post($mysqlicheck,"m5") != "")
					$m5 = get_safe_post($mysqlicheck,"m5");
                    if(get_safe_post($mysqlicheck,"m6") != "")
					$m6 = get_safe_post($mysqlicheck,"m6");
                    if(get_safe_post($mysqlicheck,"m7") != "")
					$m7 = get_safe_post($mysqlicheck,"m7");
                    if(get_safe_post($mysqlicheck,"m8") != "")
					$m8 = get_safe_post($mysqlicheck,"m8");
                    if(get_safe_post($mysqlicheck,"m9") != "")
					$m9 = get_safe_post($mysqlicheck,"m9");
                    if(get_safe_post($mysqlicheck,"m10") != "")
					$m10 = get_safe_post($mysqlicheck,"m10");
                    if(get_safe_post($mysqlicheck,"m11") != "")
					$m11 = get_safe_post($mysqlicheck,"m11");
                    if(get_safe_post($mysqlicheck,"m12") != "")
					$m12 = get_safe_post($mysqlicheck,"m12");
                    if(get_safe_post($mysqlicheck,"m13") != "")
					$m13 = get_safe_post($mysqlicheck,"m13");
                    if(get_safe_post($mysqlicheck,"m14") != "")
					$m14 = get_safe_post($mysqlicheck,"m14");
                    if(get_safe_post($mysqlicheck,"m15") != "")
					$m15 = get_safe_post($mysqlicheck,"m15");
                    


                    $sql = "UPDATE gro_title SET gro_title_m1='$m1',gro_title_m2='$m2',gro_title_m3='$m3',gro_title_m4='$m4',gro_title_m5='$m5', gro_title_m6='$m6',gro_title_m7='$m7',gro_title_m8='$m8',gro_title_m9='$m9',gro_title_m10='$m10', gro_title_m11='$m11',gro_title_m12='$m12',gro_title_m13='$m13',gro_title_m14='$m14', gro_title_m15='$m15' WHERE gro_title_id='$m'";

                    $result = $mysqlicheck->query($sql);
                    if (!$result) {
                        echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
										</div>';
                    }else{
                        echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
									<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
									عناوین <span class="text-semibold">'.$m1.'</span> با موفقیت ویرایش شد . 
									گردید . 
								</div>';
                    }
					
					
				}
                
                
			?>
				<div class="content">
                	<div class="col-md-6">
                        <form method="post" class="form-horizontal">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ویرایش عناوین</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-body">
                                
                                	
                                    
                                	<div class="form-group">
                                        <label class="col-lg-3 control-label">نکته :</label>
                                        <div class="col-lg-9">
                                            <div class="form-control-static">
                                                <p>شما میتوانید عناوین را نسبت کالا خود ویرایش کنید</p>
                                                <p>گروه های اصلی یا گروه هایی که دارای زیر مجموعه هستند نمیتوانند کالا داشته باشند و در لیست هم نمایش داده نمیشوند</p>
                                                <p>در صورتی که فیلد خالی باشد به صورت خودکار پر میشود</p>
                                            </div>
                                        </div>
                                    </div>
                                	<div class="form-group">
                                        <label class="col-lg-3 control-label">انتخاب گروه</label>
                                        <div class="col-lg-9">
                                            <select class="select" id="gp-edit-select" name="m" >
                                            	<option value="0">انتخاب گروه</option>
                                                <?php
												$table = mysqli_query($mysqlicheck,"SELECT * FROM gro");
                                                $array_parent_id[] = 0;
                                                while($rows=mysqli_fetch_assoc($table))
                                                {
                                                    if($rows['gro_parent_id'] != 0)
                                                    $array_parent_id[] = $rows['gro_parent_id'];
                                                }
                                                //print_r($array_parent_id);
                                                
                                                $table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro");
												while($rows3=mysqli_fetch_assoc($table3))
												{
                                                    if(! in_array($rows3['gro_id'],$array_parent_id)){
                                                        if($rows3['gro_id'] == $gro_id)
                                                            echo '<option selected value="'.$rows3['gro_id'].'">'.$rows3['gro_name'].'</option>';
                                                        else
                                                            echo '<option value="'.$rows3['gro_id'].'">'.$rows3['gro_name'].'</option>';
                                                    }

												}
												?>
                                            </select>
                                        </div>
                                    </div>
                                    <section id="change-item">
                                    </section>
                                    <hr>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary"> ویرایش <i class="icon-arrow-left13 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
                </div>

			</div>

		</div>

	</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $.post('serv.php',{'change':'change','infochange':'<?php echo $gro_id ?>'},function(result3){
                    
                setTimeout(function(){$('#change-item').html(result3).hide().slideDown('slow'); }, 10);

            });
            $('#gp-edit-select').on('change', function() {
              
                $.post('serv.php',{'change':'change','infochange':this.value},function(result3){
                    
                    setTimeout(function(){$('#change-item').html(result3).hide().slideDown('slow'); }, 10);
                    
                });
              
            });
        });
        
    
    </script>
</body>
</html>