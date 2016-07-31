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
				
				if(get_safe_post($mysqlicheck,"submit"))
				{
                    
                    $m1 = "نام کالا"; 
					$m2 = "مدل"; 
					$m3 = "سازنده"; 
					$m4 = "تعداد";
					$m5 = "تاریخ"; 
					$m6 = "قیمت"; 
					$m7 = "درصد تخفیف";
					$m8 = "مشخصه 1";
					$m9 = "مشخصه 2";
					$m10 = "مشخصه 3";
					$m11 = "مشخصه 4";
					$m12 = "مشخصه 5";
					$m13 = "مشخصه 6";
					$m14 = "مشخصه 7";
					$m15 = "مشخصه 8";
                    
                    
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
                    


                    $sql = "UPDATE gro_title SET gro_title_m1='$m1',gro_title_m2='$m2',gro_title_m3='$m3',gro_title_m4='$m4',gro_title_m5='$m5', gro_title_m6='$m6',gro_title_m7='$m7',gro_title_m8='$m8',gro_title_m9='$m9',gro_title_m10='$m10', gro_title_m11='$m11',gro_title_m12='$m12',gro_title_m13='$m13',gro_title_m14='$m14', gro_title_m15='$m15'";

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
									عناوین با موفقیت ویرایش گردید . 
								</div>';
                    }
					
					
				}
                
                $table = mysqli_query($mysqlicheck,"SELECT * FROM gro_title");
                while($rows=mysqli_fetch_assoc($table))
                {
                    $mm1 = $rows['gro_title_m1'];
                    $mm2 = $rows['gro_title_m2'];
                    $mm3 = $rows['gro_title_m3'];
                    $mm4 = $rows['gro_title_m4'];
                    $mm5 = $rows['gro_title_m5'];
                    $mm6 = $rows['gro_title_m6'];
                    $mm7 = $rows['gro_title_m7'];
                    $mm8 = $rows['gro_title_m8'];
                    $mm9 = $rows['gro_title_m9'];
                    $mm10 = $rows['gro_title_m10'];
                    $mm11 = $rows['gro_title_m11'];
                    $mm12 = $rows['gro_title_m12'];
                    $mm13 = $rows['gro_title_m13'];
                    $mm14 = $rows['gro_title_m14'];
                    $mm15 = $rows['gro_title_m15'];

                    $datachange = '
                    <hr>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>کد کالا :</label>
                                <input type="text" class="form-control col-md-10" disable placeholder="نام این فیلد قابل تغییر نیست" value="نام این فیلد قابل تغییر نیست">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>نام کالا :</label>
                                <input type="text" name="m1" class="form-control col-md-6" value="نام این فیلد قابل تغییر نیست" placeholder="نام این فیلد قابل تغییر نیست ">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm2.' :</label>
                                <input type="text" name="m2" class="form-control" value="'. $mm2.'" placeholder="مدل">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm3.' :</label>
                                <input type="text" name="m3" class="form-control" value="'. $mm3.'" placeholder="سازنده">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm4.' :</label>
                                <input type="text" name="m4" class="form-control" value="'. $mm4.'" placeholder="تعداد">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm5.' :</label>
                                <input type="text" name="m5" class="form-control" value="'. $mm5.'" placeholder="تاریخ">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm6.' :</label>
                                <input type="text" name="m6" class="form-control" value="'. $mm6.'" placeholder="قیمت">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm7.' :</label>
                                <input type="text" name="m7" class="form-control" value="'. $mm7.'" placeholder="درصد تخفیف">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm8.' :</label>
                                <input type="text" name="m8" class="form-control" value="'. $mm8.'" placeholder="مشخصه 1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm9.' :</label>
                                <input type="text" name="m9" class="form-control" value="'. $mm9.'" placeholder="مشخصه 2">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm10.' :</label>
                                <input type="text" name="m10" class="form-control" value="'. $mm10.'" placeholder="مشخصه 3">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm11.' :</label>
                                <input type="text" name="m11" class="form-control" value="'. $mm11.'" placeholder="مشخصه 4">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm12.' :</label>
                                <input type="text" name="m12" class="form-control" value="'. $mm12.'" placeholder="مشخصه 5">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm13.' :</label>
                                <input type="text" name="m13" class="form-control" value="'. $mm13.'" placeholder="مشخصه 6">
                            </div>
                        </div>
                    </div>
                    <div class="row content-group-lg">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm14.' :</label>
                                <input type="text" name="m14" class="form-control" value="'. $mm14.'" placeholder="مشخصه 7">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label>'. $mm15.' :</label>
                                <input type="text" name="m15" class="form-control" value="'. $mm15.'" placeholder="مشخصه 8">
                            </div>
                        </div>
                    </div>';

                }
                
			?>
				<div class="content">
                	<div class="col-md-12">
                        <form method="post" class="clearfix">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>نکته :</label>
                                                <p>شما میتوانید عناوین را نسبت فروشگاه خود ویرایش کنید</p>
                                                <p>در صورتی که فیلد خالی باشد به صورت خودکار مقدار پیشفرض قرار میگیرد</p>
                                            </div>
                                        </div>
                                    </div>
                                    <section id="change-item">
                                    <?php  echo $datachange; ?>
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
     /*   $(document).ready(function() {
            $.post('serv.php',{'change':'change','infochange':'<?php // echo $gro_id ?>'},function(result3){
                    
                setTimeout(function(){$('#change-item').html(result3).hide().slideDown('slow'); }, 10);

            });
            $('#gp-edit-select').on('change', function() {
              
                $.post('serv.php',{'change':'change','infochange':this.value},function(result3){
                    
                    setTimeout(function(){$('#change-item').html(result3).hide().slideDown('slow'); }, 10);
                    
                });
              
            });
        });
        
    */
    </script>
</body>
</html>