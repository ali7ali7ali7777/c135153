<?php
include("inc_db.php");

if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}
$unit_id = get_safe_get($mysqlicheck,"selected");
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

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
            <?php
               // print_r($_POST);
				if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"single") != "" && get_safe_post($mysqlicheck,"name")  != "")
				{
					$unit_name = get_safe_post($mysqlicheck,"name");
                    $unit_single = get_safe_post($mysqlicheck,"single");
                    
                    $sql = "UPDATE unit SET unit_name='$unit_name',unit_single='$unit_single' WHERE unit_id='$unit_id'";

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
                

				$table2 = mysqli_query($mysqlicheck,"SELECT * FROM unit where unit_id='$unit_id'");
				if (mysqli_num_rows($table2) > 0) {
                while($rows2=mysqli_fetch_assoc($table2))
				{
					$unit_name = $rows2['unit_name'];
                    $unit_single = $rows2['unit_single'];
                    
				}
                } else {
                    $url1 = 'unit-edit.php';
                    header( "Location: $url1" );
                    echo '<script type="text/javascript">
                    window.location.assign("unit-edit.php");
                    </script>';
                }
			?>
				<div class="content">
                    <div class="row">
                        <div class="col-md-12">
                        <form method="post" class="form-horizontal">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ویرایش کالا <?php echo $unit_m1; ?></h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <div class="col-md-8 content-group-lg">
                                                <label>نام واحد :</label>
                                                <input type="text" name="name" class="form-control" required="required" placeholder="نام واحد را وارد کنید" value="<?php echo $unit_name; ?>">
                                            </div>
                                            <div class="col-md-8 content-group-lg">
                                                <label>تعداد هر واحد :</label>
                                                <input type="text" name="single" class="form-control" value="<?php echo $unit_single; ?>" placeholder="تعداد واحد">
                                            </div>
                                        </div>
                                    </div>
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