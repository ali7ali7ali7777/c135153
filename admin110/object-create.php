<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

$datenow = mkdate("Y/m/d",date('Y-m-d'),'fa');
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
        
        <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/inputs/touchspin.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/switch.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

        <script type="text/javascript" src="assets/js/core/app.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_validation.js"></script>
    	<script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
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
                            
                if($_POST['m_g'] != "" && $_POST['m_n'] != ""){
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"m_s") != "" &&  get_safe_post($mysqlicheck,"m_unit") != "" )
				{
					$m_g = get_safe_post($mysqlicheck,"m_g");
					
					$result7 = mysqli_query($mysqlicheck,"SELECT MAX(object_code) FROM object where object_code like '".$m_g."___' "); 
							$max2=mysqli_fetch_row($result7);
							if (!$max2[0])
							{
								$object_code = $m_g .'001';
							}
							else
							{
						 		$object_code = $max2[0] + 1 ;
							}
                    
                    $m_n = trim(get_safe_post($mysqlicheck,"m_n"));
                    $m1 = get_safe_post($mysqlicheck,"m1");
					$m2 = get_safe_post($mysqlicheck,"m2");
					$m3 = get_safe_post($mysqlicheck,"m3");
					$m4 = get_safe_post($mysqlicheck,"m4");
					$m6 = get_safe_post($mysqlicheck,"m6");
					$m7 = get_safe_post($mysqlicheck,"m7");
					$m8 = get_safe_post($mysqlicheck,"m8");
					$m9 = get_safe_post($mysqlicheck,"m9");
					$m10 = get_safe_post($mysqlicheck,"m10");
					$m11 = get_safe_post($mysqlicheck,"m11");
					$m_s = clean(get_safe_post($mysqlicheck,"m_s"));
					$m_s_d = get_safe_post($mysqlicheck,"m_s_d");
					$unit = get_safe_post($mysqlicheck,"m_unit");
                    
                    
                    
                    $sql_o = "INSERT INTO `object`(`object_date`, `object_code`, `object_name`, `object_unit`, `object_sale`, `object_sale_di`, `object_m1`, `object_m2`, `object_m3`, `object_m4`, `object_m5`, `object_m6`, `object_m7`, `object_m8`, `object_m9`, `object_m10`, `object_m11`, `object_status`) VALUES ('". date('Y-m-d H:i:s')."', '$object_code', '$m_n', '$unit', '$m_s', '$m_s_d', '$m1',
					'$m2', '$m3', '$m4', '$m5', '$m6', '$m7', '$m8', '$m9', '$m10', '$m11', 1)";

                    $result_o = $mysqlicheck->query($sql_o);
                    $object_new_id = mysqli_insert_id($mysqlicheck);
                    if (!file_exists('../images/object/'.$object_new_id)) {
									mkdir('../images/object/'.$object_new_id, 0777, true);
                    $total = count($_FILES['pics']['name']);
					// Loop through each file
					for($i=0; $i<$total; $i++) {
						if ((($_FILES["pics"]["type"][$i] == "image/png") || ($_FILES["pics"]["type"][$i] == "image/jpeg") || ($_FILES["pics"]["type"][$i] == "image/jpg")) || ($_FILES["pics"]["type"][$i] == "image/x-icon"))
						{
							$name[] = $_FILES["pics"]["name"][$i];
							$Target_File = $_FILES["pics"]["name"][$i];
							if ($_FILES["pics"]["error"][$i] > 0){
							  echo "Return Code: " . $_FILES["pics"]["error"][$i] . "<br />";
							}
							else{
								$file_extention	=	substr($Target_File,strlen($Target_File)-3);
								$file_name = substr($_FILES["pics"]["name"][$i], 0, -4);
								if($file_extention=="peg")
									$file_extention = "jpg";
								
								//braye sakhte dobare
								$New_Target_File = $file_name.".".$file_extention;
								
								}
								move_uploaded_file($_FILES["pics"]["tmp_name"][$i],'../images/object/'.$object_new_id.'/'.$New_Target_File);
							}
						}
					}

                    if (!$result_o) {
                        echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
										</div>';
                    }else{
                        echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
									<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
									کالا <span class="text-semibold">'.$m_n.'</span> با کد اختصاصی برنامه به شماره '.$object_code.' ثبت گردید . 
									
								</div>';
                    }
					
					
					}
                }
                $table2 = mysqli_query($mysqlicheck,"SELECT * FROM gro_title");
                while($rows2=mysqli_fetch_assoc($table2))
                {
                    $mm1 = $rows2['gro_title_m1'];
                    $mm2 = $rows2['gro_title_m2'];
                    $mm3 = $rows2['gro_title_m3'];
                    $mm4 = $rows2['gro_title_m4'];
                    $mm5 = $rows2['gro_title_m5'];
                    $mm6 = $rows2['gro_title_m6'];
                    $mm7 = $rows2['gro_title_m7'];
                    $mm8 = $rows2['gro_title_m8'];
                    $mm9 = $rows2['gro_title_m9'];
                    $mm10 = $rows2['gro_title_m10'];
                    $mm11 = $rows2['gro_title_m11'];
                   
                }
                
			?>
                                <div class="content">
                                        <form method="post" class="form-horizontal form-validate-jquery" enctype="multipart/form-data">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">ایجاد کالا جدید</h5>
                                                </div>
                                                <div class="panel-group panel-group-control panel-group-control-right content-group-lg" id="accordion-control-right">
                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h6 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion-control-right" href="#accordion-control-right-group1">مشخصات اصلی</a>
                                                            </h6>
                                                        </div>
                                                        <div id="accordion-control-right-group1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label>انتخاب گروه</label>
                                                                            <select class="select" id="gp-edit-select" name="m_g">
                                                                                <option value="">انتخاب گروه</option>
                                                         <?php
                $table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro  WHERE gro_kod like '_____'");
                while($rows3=mysqli_fetch_assoc($table3))
                {
                    echo '<option value="'.$rows3['gro_kod'].'">'.$rows3['gro_name'].'</option>';
                                           
                }
                                         ?>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo $mm1 ?> :</label>
                                                                            <input type="text" name="m1" class="form-control"  placeholder="<?php echo $mm1 ?> را وارد کنید" value="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label>نام کالا :</label>
                                                                            <input type="text" name="m_n" class="form-control" value="" required="required" placeholder="نام کالا را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-5">
                                                                            <label>انتخاب واحد کالا</label>
                                                                            <select class="select" id="gp-edit-select" name="m_unit">
                                                                                <?php
                                                                                $table3 = mysqli_query($mysqlicheck,"SELECT * FROM unit");
                                                                                while($rows3=mysqli_fetch_assoc($table3))
                                                                                {
                                                                                    echo '<option value="'.$rows3['unit_name'].'">'.$rows3['unit_name'].'</option>';
                                                                                }
                                                                                ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <label>انتخاب واحد کالا</label>
                                                                            <input type="text" value="" id="unit" class="form-control" aria-required="true" placeholder="تعداد" disabled>

                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label>تاریخ :</label>
                                                                            <input type="text" name="m_date" value="<?php echo $datenow; ?>" required="required" class="form-control" aria-required="true" placeholder="تاریخ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label>قیمت فروش (ریال):</label>
                                                                            <input type="text" name="m_s" id="prc" class="form-control" placeholder="قیمت فروش را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label>قیمت با تخفیف :</label>
                                                                            <input type="text" class="form-control" name="m_s_d" id="prc2" placeholder="قیمت با تخفیف را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-12">
                                                                            <label>ارسال تصویر :</label>
                                                                            <input type="file" name="pics[]" class="file-input" data-show-caption="false" multiple="multiple" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default">
                                                                            <span class="help-block">حجم کمتر از 2 مگابایت و فرمت قابل قبول jpg و png </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-white">
                                                        <div class="panel-heading">
                                                            <h6 class="panel-title">
                                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion-control-right" href="#accordion-control-right-group2">مشخصات تکمیلی</a>
                                                            </h6>
                                                        </div>
                                                        <div id="accordion-control-right-group2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm2; ?> :</label>
                                                                            <input type="text" name="m2" class="form-control" value="" placeholder="<?php echo  $mm2; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm3; ?> :</label>
                                                                            <input type="text" name="m3" class="form-control" value="" placeholder="<?php echo  $mm3; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm4; ?> :</label>
                                                                            <input type="text" name="m4" class="form-control" value="" placeholder="<?php echo  $mm4; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm5; ?> :</label>
                                                                            <input type="text" name="m5" class="form-control" value="" placeholder="<?php echo  $mm5; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm6; ?> :</label>
                                                                            <input type="text" name="m6" class="form-control" value="" placeholder="<?php echo  $mm6; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm7; ?> :</label>
                                                                            <input type="text" name="m7" class="form-control" value="" placeholder="<?php echo  $mm7; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm8; ?> :</label>
                                                                            <input type="text" name="m8" class="form-control" value="" placeholder="<?php echo  $mm8; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm9; ?> :</label>
                                                                            <input type="text" name="m9" class="form-control" value="" placeholder="<?php echo  $mm9; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row content-group-lg">
                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm10; ?> :</label>
                                                                            <input type="text" name="m10" class="form-control" value="" placeholder="<?php echo  $mm10; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="col-md-8">
                                                                            <label><?php echo  $mm11; ?> :</label>
                                                                            <input type="text" name="m11" class="form-control" value="" placeholder="<?php echo  $mm11; ?> را وارد کنید">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    <div class="panel-default">
                                                        <div class="panel-body">
                                                            <div class="text-right">
                                                                <button type="submit" name="submit" value="save" class="btn btn-primary"> ایجاد و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                                            </div>
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
            <script type="text/javascript">
            /*    $(document).ready(function () {
                    $.post('serv.php', {
                        'change2': 'change2',
                        'infochange2': '<?php // echo $gro_id ?>'
                    }, function (result2) {

                        setTimeout(function () {
                            $('#change-item').html(result2).hide().slideDown('slow');
                        }, 10);

                    });
                    $('#gp-edit-select').on('change', function () {

                        $.post('serv.php', {
                            'change2': 'change2',
                            'infochange2': this.value
                        }, function (result2) {

                            setTimeout(function () {
                                $('#change-item').html(result2).hide().slideDown('slow');
                                $(function() {
                                  var salt = Math.floor(Math.random() * 1000),
                                    time;

                                  function load_script() {
                                    $('#myscript').remove();
                                    $.getScript("assets/js/pages/uploader_bootstrap.js?s=" + salt, function() {
                                      $('script:last').attr('id', 'myscript');
                                      salt = Math.floor(Math.random() * 1000);
                                      time = setTimeout(function() {
                                        load_script();
                                      }, 30 * 1000);
                                    });
                                  }
                                  load_script();
                                });
                            }, 10);

                        });

                    });
                });*/
                $(document).ready(function () {
                    $("#prc").change(function () {
                       numval = $("#prc").val();
                        //alert(numval);
                         $("#prc").val(ToRial(numval));
                    });
					$("#prc2").change(function () {
                       numval = $("#prc2").val();
                        //alert(numval);
                         $("#prc2").val(ToRial(numval));
                    });
					/*$("#gp-edit-select").onclick(function () {
                       unitid = $("#gp-edit-select").val();
						 
                    });*/
                });

            </script>
    </body>

    </html>