<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}
//error_reporting(1);
$object_id = get_safe_get($mysqlicheck,"selected");

$_SESSION['object_id'] = $object_id;
$dir = '../images/object/'.$object_id.'/';


// iterate
if(!$dir){
   
}else{
    // image extensions
    $extensions = array('jpg', 'jpeg', 'png');

    // init result
    $resultimg = array();

    // directory to scan
    $directory = new DirectoryIterator($dir);
    foreach ($directory as $fileinfo) {
        // must be a file
        if ($fileinfo->isFile()) {
            // file extension
            $extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
            // check if extension match
            if (in_array($extension, $extensions)) {
                // add to result
                $resultimg[] = $fileinfo->getFilename();
            }
        }
    }
    
}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
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
	<script type="text/javascript" src="assets/js/plugins/media/fancybox.min.js"></script>
	
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/gallery.js"></script>
    <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
            <?php
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"m") != "" && get_safe_post($mysqlicheck,"mm") == $object_id)
				{
					$m = get_safe_post($mysqlicheck,"m");
                    $mcode = get_safe_post($mysqlicheck,"mcode");
                    $m1 = get_safe_post($mysqlicheck,"m1");
					$m2 = get_safe_post($mysqlicheck,"m2");
					$m3 = get_safe_post($mysqlicheck,"m3");
					$m4 = get_safe_post($mysqlicheck,"m4");
					$m5 = get_safe_post($mysqlicheck,"date_iso");
					$m6 = clean(get_safe_post($mysqlicheck,"m6"));
					$m7 = get_safe_post($mysqlicheck,"m7");
					$m8 = get_safe_post($mysqlicheck,"m8");
					$m9 = get_safe_post($mysqlicheck,"m9");
					$m10 = get_safe_post($mysqlicheck,"m10");
					$m11 = get_safe_post($mysqlicheck,"m11");
					$m12 = get_safe_post($mysqlicheck,"m12");
					$m13 = get_safe_post($mysqlicheck,"m13");
					$m14 = get_safe_post($mysqlicheck,"m14");
					$m15 = get_safe_post($mysqlicheck,"m15");
                    $status = get_safe_post($mysqlicheck,"status");
                    $unit = get_safe_post($mysqlicheck,"unit");


                    $sql = "UPDATE object SET object_gro_id='$m',object_code='$mcode',object_m1='$m1',object_m2='$m2',object_m3='$m3',object_m4='$m4',object_m5='$m5', object_m6='$m6',object_m7='$m7',object_m8='$m8',object_m9='$m9',object_m10='$m10', object_m11='$m11',object_m12='$m12',object_m13='$m13',object_m14='$m14', object_m15='$m15', object_status='$status', object_unit_id ='$unit' WHERE object_id='$object_id'";
                    
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
									ویرایش با موفقیت انجام شد . 
								</div>';
                    }
				}
                

				$table2 = mysqli_query($mysqlicheck,"SELECT * FROM object where object_id='$object_id'");
				if (mysqli_num_rows($table2) > 0) {
                while($rows2=mysqli_fetch_assoc($table2))
				{
					$object_m1 = $rows2['object_m1'];
                    $object_m2 = $rows2['object_m2'];
                    $object_m3 = $rows2['object_m3'];
                    $object_m4 = $rows2['object_m4'];
                    $object_m5 = $rows2['object_m5'];
                    $object_m6 = $rows2['object_m6'];
                    $object_m7 = $rows2['object_m7'];
                    $object_m8 = $rows2['object_m8'];
                    $object_m9 = $rows2['object_m9'];
                    $object_m10 = $rows2['object_m10'];
                    $object_m11 = $rows2['object_m11'];
                    $object_m12 = $rows2['object_m12'];
                    $object_m13 = $rows2['object_m13'];
                    $object_m14 = $rows2['object_m14'];
                    $object_m15 = $rows2['object_m15'];
                    $object_date = $rows2['object_date'];
                    $object_gro_id = $rows2['object_gro_id'];
                    $object_code = $rows2['object_code'];
                    $object_status = $rows2['object_status'];
                    $object_unit = $rows2['object_unit_id'];
                    
				}
                } else {
                    $url1 = 'object-edit.php';
                    header( "Location: $url1" );
                    echo '<script type="text/javascript">
                    window.location.assign("object-edit.php");
                    </script>';
                }
                
                
                $table22 = mysqli_query($mysqlicheck,"SELECT * FROM gro_title");
                while($rows22=mysqli_fetch_assoc($table22))
                {
                    $mm = $rows22['gro_title_id'];
                    $mm1 = $rows22['gro_title_m1'];
                    $mm2 = $rows22['gro_title_m2'];
                    $mm3 = $rows22['gro_title_m3'];
                    $mm4 = $rows22['gro_title_m4'];
                    $mm5 = $rows22['gro_title_m5'];
                    $mm6 = $rows22['gro_title_m6'];
                    $mm7 = $rows22['gro_title_m7'];
                    $mm8 = $rows22['gro_title_m8'];
                    $mm9 = $rows22['gro_title_m9'];
                    $mm10 = $rows22['gro_title_m10'];
                    $mm11 = $rows22['gro_title_m11'];
                    $mm12 = $rows22['gro_title_m12'];
                    $mm13 = $rows22['gro_title_m13'];
                    $mm14 = $rows22['gro_title_m14'];
                    $mm15 = $rows22['gro_title_m15'];
                }
                
                if($object_status == 1)
                    $btn = '<button id="demobtn" type="button" class="btn col-lg-5 bg-success-400 dropdown-toggle" data-toggle="dropdown">فعال</button>';
                if($object_status == 2)
                    $btn = '<button id="demobtn" type="button" class="btn col-lg-5 bg-grey-400 dropdown-toggle" data-toggle="dropdown">غیر فعال</button>';
					
				
			?>
				<div class="content">
                    <div class="row">
                        <div class="col-md-6">
                        <form method="post" class="form-horizontal">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ویرایش کالا <?php echo $object_m1; ?></h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> ویرایش گروه کالا</label>
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
                                                        if($rows3['gro_id'] == $object_gro_id)
                                                            echo '<option selected value="'.$rows3['gro_id'].'">'.$rows3['gro_name'].'</option>';
                                                        else
                                                            echo '<option value="'.$rows3['gro_id'].'">'.$rows3['gro_name'].'</option>';
                                                    }

                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">کد کالا :</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder=" کد کالا" value="<?php  echo $object_code; ?>" name="mcode" >
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">کد اختصاصی برنامه:</label>
                                        <div class="col-lg-9">
                                            <input type="text" disabled class="form-control" placeholder="این فیلد قابل تغییر نیست" value="<?php  echo $object_id; ?>" >
                                            <input type="hidden" name="mm" value="<?php  echo $object_id; ?>" >
                                            <span class="help-block">این فیلد قابل تغییر نیست </span>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">نام کالا :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m1" class="form-control" value="<?php  echo $object_m1; ?>" placeholder="نام کالا">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm6; ?> (ریال):</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m6" id="prc" class="form-control" value="<?php  echo $object_m6; ?>" placeholder="<?php  echo $mm6; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm7; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m7" class="form-control" value="<?php  echo $object_m7; ?>" placeholder="<?php  echo $mm7; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm4; ?> :</label>
                                        <div class="col-lg-5">
                                            <label>انتخاب واحد کالا</label>
                                            <select class="select" id="gp-edit-select" name="unit">
                                                <?php
                                                $table32 = mysqli_query($mysqlicheck,"SELECT * FROM unit");
                                                while($rows32=mysqli_fetch_assoc($table32))
                                                {
                                                    if($rows32['unit_id'] == $object_unit)
                                                        echo '<option selected value="'.$rows3['unit_id'].'">'.$rows32['unit_name'].'</option>';
                                                    else
                                                        echo '<option value="'.$rows32['unit_id'].'">'.$rows32['unit_name'].'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>تعداد</label>
                                            <input type="text" name="m4" class="form-control" value="<?php  echo $object_m4; ?>" placeholder="<?php  echo $mm4; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm5; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m5" class="form-control" value="<?php  echo $object_m5; ?>" placeholder="<?php  echo $mm5; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm3; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m3" class="form-control" value="<?php  echo $object_m3; ?>" placeholder="<?php  echo $mm3; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm2; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m2" class="form-control" value="<?php  echo $object_m2; ?>" placeholder="<?php  echo $mm2; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm8; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m8" class="form-control" value="<?php  echo $object_m8; ?>" placeholder="<?php  echo $mm8; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm9; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m9" class="form-control" value="<?php  echo $object_m9; ?>" placeholder="<?php  echo $mm9; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm10; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m10" class="form-control" value="<?php  echo $object_m10; ?>" placeholder="<?php  echo $mm10; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm11; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m11" class="form-control" value="<?php  echo $object_m11; ?>" placeholder="<?php  echo $mm11; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm12; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m12" class="form-control" value="<?php  echo $object_m12; ?>" placeholder="<?php  echo $mm12; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm13; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m13" class="form-control" value="<?php  echo $object_m13; ?>" placeholder="<?php  echo $mm13; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm14; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m14" class="form-control" value="<?php  echo $object_m14; ?>" placeholder="<?php  echo $mm14; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"><?php  echo $mm15; ?> :</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="m15" class="form-control" value="<?php  echo $object_m15; ?>" placeholder="<?php  echo $mm15; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> وضعیت انتشار در سایت :</label>
                                        <input type="hidden" name="status" id="status" value="<?php echo $object_status; ?>">
                                        <div class="btn-group dropup col-lg-9">
                                            <?php echo $btn; ?>
                                            <ul id="demolist" class="dropdown-menu dropdown-menu-left">
                                                <li value="1"><a ><i class="glyphicon glyphicon-ok"></i> فعال</a></li>
                                                <li value="2"><a ><i class="glyphicon glyphicon-remove"></i> غیر فعال</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary"> ویرایش و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
                        <div class="col-md-6">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                   <button type="button" class="btn btn-primary" onclick="location.href='object-img.php';">ویرایش تصاویر</button>
                                    <hr>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li>
                                                <a data-action="collapse"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                                
                                
                                
                                <div class="row">
                                   <?php
                                    $temp_number = 0;
                                    foreach($resultimg as $image){
                                        
                                        ?>
                                    <div class="col-lg-3 col-sm-3">
                                        <div class="thumbnail">
                                            <div class="thumb">
                                                <img src="../images/object/<?php echo $object_id.'/'.$image; ?>" alt="">
                                                <div class="caption-overflow">
                                                    <span>
                                                        <a href="../images/object/<?php echo $object_id.'/'.$image; ?>" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <?php echo $image; ?>
                                            </div>
                                        </div>
                                    </div>
                                      <?php 
                                        $temp_number++;
                                        if ($temp_number % 4 == 0)
                                            echo '</div><div class="row">';
                                    }
                                      ?>
                                    
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

			</div>

		</div>

	</div>
    <script type="text/javascript">
    $('#demolist li').on('click', function(){
        var detaval = $(this).val();
        var detatext = $(this).text();
        $('#status').val(detaval);
        $('#demobtn').text(detatext);
        $('#demobtn').removeClass("bg-success-400 bg-grey-400");
        if(detaval == 1)
        $('#demobtn').addClass("bg-success-400");
        if(detaval == 2)
        $('#demobtn').addClass("bg-grey-400");
        
        
    });
        $(document).ready(function () {
            $("#prc").change(function () {
               numval = $("#prc").val();
                //alert(numval);
                 $("#prc").val(ToRial(numval));
            });
        });
    </script>
</body>
</html>