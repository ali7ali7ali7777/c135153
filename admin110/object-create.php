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
        <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
        
        <script type="text/javascript" src="assets/js/core/app.js"></script>
    	<script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
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
                        //    print_r($_POST['m'].$_POST['m1']."****************");
                $gro_id = get_safe_post($mysqlicheck,"m");
				if($_POST['m'] != "" && $_POST['m1'] != ""){
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"m1") != "" && get_safe_post($mysqlicheck,"m") != "" )
				{
                    $m = get_safe_post($mysqlicheck,"m");
                    $mcode = get_safe_post($mysqlicheck,"mcode");
                    $m1 = get_safe_post($mysqlicheck,"m1");
					$m2 = get_safe_post($mysqlicheck,"m2");
					$m3 = get_safe_post($mysqlicheck,"m3");
					$m4 = get_safe_post($mysqlicheck,"m4");
					$m5 = get_safe_post($mysqlicheck,"m5");
					$m6 = get_safe_post($mysqlicheck,"m6");
					$m7 = get_safe_post($mysqlicheck,"m7");
					$m8 = get_safe_post($mysqlicheck,"m8");
					$m9 = get_safe_post($mysqlicheck,"m9");
					$m10 = get_safe_post($mysqlicheck,"m10");
					$m11 = get_safe_post($mysqlicheck,"m11");
					$m12 = get_safe_post($mysqlicheck,"m12");
					$m13 = get_safe_post($mysqlicheck,"m13");
					$m14 = get_safe_post($mysqlicheck,"m14");
					$m15 = get_safe_post($mysqlicheck,"m15");
                    
                    
                    
					
                    
                    $sql = "INSERT INTO object(object_id,object_date, object_gro_id, object_code, object_m1, object_m2, object_m3, object_m4, object_m5, object_m6, object_m7, object_m8, object_m9, object_m10, object_m11, object_m12, object_m13, object_m14, object_m15) VALUES (null,'" . date('Y-m-d H:i:s') .  "','$m','$mcode','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9','$m10','$m11','$m12','$m13','$m14','$m15')";

                    $result = $mysqlicheck->query($sql);
                    $object_new_id = mysqli_insert_id($mysqlicheck);
                    
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
								if (!file_exists('../images/object/'.$object_new_id)) {
									mkdir('../images/object/'.$object_new_id, 0777, true);
								}
								move_uploaded_file($_FILES["pics"]["tmp_name"][$i],'../images/object/'.$object_new_id.'/'.$New_Target_File);
							}
						}
					}

                    if (!$result) {
                        echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
										</div>';
                    }else{
                        echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
									<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
									کالا <span class="text-semibold">'.$m1.'</span> با کد '.$mcode.' و کد اختصاصی برنامه به شماره '.$object_new_id.' ثبت گردید . 
									
								</div>';
                    }
					
					
				}
                }else{
                    echo'
							<div class="alert alert-danger alert-styled-left alert-bordered">
											<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
											ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید ، فیلد ها را با دقت پر کنید
										</div>';
                    
                }
                
			?>
                                <div class="content">
                                    <div class="col-md-6">
                                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="panel panel-flat">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">ایجاد کالا جدید</h5>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li>
                                                                <a data-action="collapse"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="panel-body">



                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label">نکته :</label>
                                                        <div class="col-lg-9">
                                                            <div class="form-control-static">
                                                                <p>مشخصات کالا جدید را وارد کنید</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-3 control-label">انتخاب گروه</label>
                                                        <div class="col-lg-9">
                                                            <select class="select" id="gp-edit-select" name="m">
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
                                                        <button type="submit" name="submit" value="save" class="btn btn-primary"> ایجاد و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
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
                $(document).ready(function () {
                    $.post('serv.php', {
                        'change2': 'change2',
                        'infochange2': '<?php echo $gro_id ?>'
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
                });
            </script>
    </body>

    </html>