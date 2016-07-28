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
    

	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>

</head>

<body class="navbar-top">

	<?php require_once "menu1.php"; ?>
    
	<div class="page-container">

		<div class="page-content">

			<?php require_once "menu2.php"; ?>

			<div class="content-wrapper">

				<div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">ویرایش و تغییرات به صورت خودکار ذخیره میشود</h5>
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-primary" onclick="location.href='object-product.php?selected=<?php echo $_SESSION['object_id']; ?>';"> برگشت</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-body">
                                    <div class="video-container content-group">
                                      <iframe class="" src="../filemanager/file.php" allowfullscreen="" frameborder="0" mozallowfullscreen=""  webkitallowfullscreen=""></iframe>
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
        //$('#c').load('../filemanager/file.php');
    </script>
</body>
</html>