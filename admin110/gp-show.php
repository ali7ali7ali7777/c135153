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

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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

	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	
	<script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
	<script type="text/javascript" src="assets/js/charts/d3/tree/tree_collapsible.js"></script>

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
							<h5 class="panel-title">مشاهده گروه های ایجاد شده و زیر مجموعه ها</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group">دابره های تو پر حاوی زیر مجموعه هستند و میتوانید با کلیک بر روی آن زیر مجموعه آن را مشاهده کنید .</p>

							<div class="chart-container has-scroll">
								<div class="chart has-minimum-width" id="d3-tree-collapsible"></div>
							</div>
						</div>
					</div>
                </div>

			</div>

		</div>

	</div>

</body>
</html>