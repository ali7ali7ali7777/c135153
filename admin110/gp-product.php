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
    <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
            <?php
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"name") != "" && get_safe_post($mysqlicheck,"item") != "")
				{
					$sub = $_POST['sub'];
					$name_gp = get_safe_post($mysqlicheck,"name");
					$id_gp = get_safe_post($mysqlicheck,"item");
                    $gro_status = get_safe_post($mysqlicheck,"status");
					
					
					$sql="UPDATE gro SET gro_name='$name_gp',gro_status='$gro_status',gro_parent_id='$sub' WHERE gro_id='$id_gp'";
					$result = $mysqlicheck->query($sql);
					if (!$result) {
						echo'
						<div class="alert alert-danger alert-styled-left alert-bordered">
										<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
										ارسال اطلاعات با <span class="text-semibold">خطا/span> رو برو گردید.
									</div>';
					}else{
						echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
								<button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
								گروه <span class="text-semibold">'.$name_gp.'</span> با موفقیت ویرایش گردید . 
							</div>';
					}
				}	
				
				$gro_id = get_safe_get($mysqlicheck,"selected");

				$table2 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_id='$gro_id'");
				while($rows2=mysqli_fetch_assoc($table2))
				{
					$gro_name = $rows2['gro_name'];
					$gro_parent_id = $rows2['gro_parent_id'];
                    $gro_status = $rows2['gro_status'];
				}
                if($gro_status == 1)
                    $btn = '<button id="demobtn" type="button" class="btn col-lg-5 bg-success-400 dropdown-toggle" data-toggle="dropdown">فعال</button>';
                if($gro_status == 2)
                    $btn = '<button id="demobtn" type="button" class="btn col-lg-5 bg-grey-400 dropdown-toggle" data-toggle="dropdown">غیر فعال</button>';
					
					
				
			?>
				<div class="content">
                	<div class="col-md-6">
                        <form method="post" class="form-horizontal">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ویرایش گروه</h5>
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
                                            <input type="text" name="name" class="form-control" placeholder="نام" value="<?php echo $gro_name; ?>">
                                            <input type="hidden" name="item" class="form-control" placeholder="نام" value="<?php echo $gro_id; ?>">
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">انتخاب گروه اصلی</label>
                                        <div class="col-lg-9">
                                            <select class="select" name="sub">
                                            	<option value="0">انتخاب گروه اصلی</option>
                                                <?php
												$table = mysqli_query($mysqlicheck,"SELECT * FROM gro");
												while($rows=mysqli_fetch_assoc($table))
												{
													
													if($gro_parent_id == $rows['gro_id'])
														echo '<option selected value="'.$rows['gro_id'].'">'.$rows['gro_name'].'</option>';
													else
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
                                                <p>چنانچه این گروه ، گروه فرعی میباشد ، گروه اصلی آن را مشخص کنید.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">وضعیت نمایش در سایت فروشگاه :</label>
                                        <input type="hidden" name="status" id="status" value="<?php echo $gro_status; ?>">
                                        <div class="btn-group dropup col-lg-9">
                                            <?php echo $btn; ?>
                                            <ul id="demolist" class="dropdown-menu dropdown-menu-left">
                                                <li value="1"><a ><i class="glyphicon glyphicon-ok"></i> فعال</a></li>
                                                <li value="2"><a ><i class="glyphicon glyphicon-remove"></i> غیر فعال</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">نکته :</label>
                                        <div class="col-lg-9">
                                            <div class="form-control-static">
                                                <p>با غیر فعال کردن گروه ، تمام گروه های فرعی (زیرمجموعه) و کالا های این گروه در سایت فروشگاه غیر فعال میشوند .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary">ویرایش و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
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
    </script>
</body>
</html>