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


	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    

	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>
            
            <div class="content-wrapper">
				<div class="content">
                	<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">ویرایش گروه</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							گروه مورد نظر را انخاب کنید
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>نام گروه</th>
									<th>گروه های فرعی این گروه</th>
									<th class="text-center">وضعیت نمایش در سایت</th>
									<th class="text-center">ویرایش</th>
								</tr>
							</thead>
							<tbody>
                                 <?php
									$table2 = mysqli_query($mysqlicheck,"SELECT * FROM gro");
									while($rows2=mysqli_fetch_assoc($table2))
									{
                                        $gro_status = $rows2['gro_status'];
                                        $gro_id = $rows2['gro_id'];
                                        if($gro_status == 1) 
                                            $temp = '<a class="btn bg-success-400 col-md-6 col-md-offset-3" id="btn'.$gro_id.'" onClick="AdminChange2(1,'.$gro_id.')">فعال</a>'; 
                                        elseif($gro_status == 2) 
                                            $temp = '<a class="btn bg-danger-400 col-md-6 col-md-offset-3" id="btn'.$gro_id.'" onClick="AdminChange2(2,'.$gro_id.')">غیر فعال</a>';
										
                                        echo '<tr>
												<td>
												  '.$rows2['gro_name'].'
												</td>
												<td>';
												
										$table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_parent_id=".$rows2['gro_id']." ");
										$numResults2 = $table3->num_rows;
										$counter2 = 0;
										while($rows3=mysqli_fetch_assoc($table3))
										{
											if(++$counter2 == $numResults2) 
												echo $rows3['gro_name'];// last row
											 else
												echo $rows3['gro_name']." - "; // not last row
											
										}
                                        echo'</td>
                                        <td class="text-center">'.$temp.'</td>';
                                        
										echo '
											<td class="text-center"><a class="btn bg-slate" href="gp-product.php?selected='.$gro_id.'">ویرایش</a></td>
											</tr>';
									}
									?>
							</tbody>
						</table>
					</div>
                </div>

			</div>

		</div>

	</div>
	<script type="text/javascript">
        function AdminChange2(x,id) {
        //alert(x+"--"+id);
        console.log(x,id);
        var btnid ="#btn"+id;
        //alert(btnid);

        if(x==1){

            $.post('serv.php',{'method3':'change3','info3':id},function(result3){

                if(result3 == "ok3" ){

                    var btnid2 ="AdminChange2(2,"+id+")";
                    $(btnid).attr("onclick",btnid2);
                    $(btnid).removeClass("bg-success-400");
                    $(btnid).addClass("bg-danger-400");
                    $(btnid).text("غیر فعال");
                }else{

                }
            });
        }else {
            $.post('serv.php',{'method4':'change4','info4':id},function(result4){
                console.log(result4);
                if(result4 == "ok4" ){
                    var btnid2 ="AdminChange2(1,"+id+")";
                    $(btnid).attr("onclick",btnid2);
                    $(btnid).removeClass("bg-danger-400");
                    $(btnid).addClass("bg-success-400");
                    $(btnid).text("فعال");
                }else{

                }
            });
        }
    }
    </script>

</body>
</html>