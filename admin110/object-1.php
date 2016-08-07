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

	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_extension_colvis.js"></script>
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
                	<div class="col-md-12">
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
                                <div class="panel-body">
                                    <table class="table datatable-colvis-restore">
                                        <thead>
                                            <tr>
                                                <th>نام کالا</th>
                                                <th>کد کالا </th>
                                                <th>گروه کالا</th>
                                                <th>فی خرید</th>
                                                <th>فی فروش</th>
                                                <th>تعداد</th>
                                                <th>انتخاب</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $table = mysqli_query($mysqlicheck,"SELECT * FROM object");
                                            while($rows=mysqli_fetch_assoc($table))
                                            {
                                                $object_m1 = $rows['object_m1'];
                                                $object_id = $rows['object_id'];
                                                $object_code = $rows['object_code'];
                                                $object_gro_id = $rows['object_gro_id'];
                                                $object_m6 = $rows['object_m6'];
                                                $object_m7 = $rows['object_m7'];
                                            }
                                            ?>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span class="label label-success">Active</span></td>
                                                <td>$85,600</td>
                                                <td class="text-center"><a class="btn bg-slate" href="gp-product.php?selected='.$gro_id.'">ویرایش</a></td></td>
                                            </tr>
                                            </tbody>
                                    </table>
                                    <hr>
                                    <div class="text-right">
                                        <button type="submit" name="submit" value="save" class="btn btn-primary">ایجاد و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
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

</body>
</html>
