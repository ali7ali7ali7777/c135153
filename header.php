<?php include("admin110/inc_db.php");
if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url ='' ;
	die();
}

$send = get_safe_post($mysqlicheck,"send");

if(!empty($send))
{
	switch($send)
	{
		case "forget":
			
				
			
		break;
		case "create":
			$e_name_c = trim(get_safe_post($mysqlicheck,"e_name_c"));
			$u_name_c = trim(get_safe_post($mysqlicheck,"u_name_c"));
			$f_name_c = trim(get_safe_post($mysqlicheck,"f_name_c"));
			$p_name_c = get_safe_post($mysqlicheck,"p_name_c");
			if ($e_name_c != "" || $u_name_c != "" ||$f_name_c != "" ||$p_name_c != "" )
			{
				$result_c = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_name` ='".$u_name_c."' or `user_email` = '".$e_name_c."'");
				if ($result_c->num_rows > 0)
				{
					$mas_c = 'کاربری با این نام یا ایمیل قبلاً ثبت شده است';
				}
				else
				{
					$sql_c = 'INSERT INTO `user`(`user_name`, `user_family`, `user_email`,  `user_pass`) VALUES ("'.$u_name_c.'","'.$f_name_c.'","'.$e_name_c.'", "'.md5($p_name_c).'")';
					$result_c1 = $mysqlicheck->query($sql_c);
                    if (!$result_c1)
					{
						$mas_c = 'ثبت اطلاعات با خطا مواجه گردید ';	
					}
					else
					{
						$mas_c = 'ثبت شد';
					}
				}
			}
			else
			{
				$mas_c = "پر کردن همه فیلدها  الزامیست";
			}
		break;
		case "login":
			$e_name_v = htmlspecialchars(trim(get_safe_post($mysqlicheck,"e_name_v")));
			$p_name_v = htmlspecialchars(get_safe_post($mysqlicheck,"p_name_v"));
			if ($e_name_v != "" || $p_name_v != "")
			{
				$result_l = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_email` ='".$e_name_v."' and `user_pass` = '".md5($p_name_v)."'");
				if ($result_l->num_rows > 0)
				{
					session_start();
					$_SESSION['login'] = "user";
					$_SESSION['login_user']=$result_l['user_id'];
				}
				else
				{
					$mas_l = 'کاربری با این مشخصات وجود ندارد';
				}
			}
			else
			{
				$mas_l = 'پر کردن همه فیلدها الزامیست';
			}
		break;
	}
}
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>فروشگاه اینترنتی</title>
        <meta  http-equiv="Content-Language" content="fa">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
<!--<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">-->
    <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<header class="c-layout-header c-layout-header-6 c-navbar-fluid" data-minimize-offset="80">
  <div class="c-topbar">
    <div class="container">
      <nav class="c-top-menu">
        <ul class="c-links c-theme-ul">
          <li> <a href="index.php" class="c-font-uppercase c-font-bold">خانه</a> </li>
          <li class="c-divider"></li>
          <li> <a href="page-help.php" class="c-font-uppercase c-font-bold">راهنما</a> </li>
          
          <li> <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">ورود</a> </li>
        </ul>
        <ul class="c-ext hide c-theme-ul">
          <li class="c-search hide"> 
            <!-- BEGIN: QUICK SEARCH -->
            <form action="#">
              <input type="text" name="query" placeholder="جستجو..." value="" class="form-control" autocomplete="off">
              <i class="fa fa-search"></i>
            </form>
            <!-- END: QUICK SEARCH --> 
          </li>
        </ul>
      </nav>
      <div class="c-brand"> <a href="index.php" class="c-logo"> <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo"> <img src="assets/base/img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse"> <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo"> </a>
        <ul class="c-icons c-theme-ul">
          <li> <a href="#"> <i class="icon-social-twitter"></i> </a> </li>
          <li> <a href="#"> <i class="icon-social-facebook"></i> </a> </li>
          <li> <a href="#"> <i class="icon-social-dribbble"></i> </a> </li>
        </ul>
        <button class="c-topbar-toggler" type="button"> <i class="fa fa-ellipsis-v"></i> </button>
        <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu"> <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span> </button>
        <button class="c-search-toggler" type="button"> <i class="fa fa-search"></i> </button>
        <button class="c-cart-toggler" type="button"> <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span> </button>
      </div>
    </div>
  </div>
  <div class="c-navbar">
    <div class="container"> 
      <!-- BEGIN: BRAND -->
      <div class="c-navbar-wrapper clearfix"> 
        <!-- END: BRAND --> 
        <!-- BEGIN: QUICK SEARCH -->
        <form class="c-quick-search" action="#">
          <input type="text" name="query" placeholder="جهت جستجو مطلب خود را وارد نمایید ..." value="" class="form-control" autocomplete="off">
          <span class="c-theme-link">&times;</span>
        </form>
        <!-- END: QUICK SEARCH --> 
        <!-- BEGIN: HOR NAV --> 
        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- BEGIN: MEGA MENU --> 
        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
          <ul class="nav navbar-nav c-theme-nav">
            <?php
		    
			
			
			
			
$rant_h1 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '___' and gro_status =1");
if (mysqli_num_rows($rant_h1) > 0)
{	
	while($row_h1=mysqli_fetch_assoc($rant_h1))
	{
?>
            <li> <a href="shop-product-search.php?id=<?php echo $row_h1['gro_id'] ?>" class="c-link dropdown-toggle"><?php echo $row_h1['gro_name'] ?> <span class="c-arrow c-toggler"></span> </a>
              <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                <div class="row">
                  <?php
		$rant_h2 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '".$row_h1['gro_kod']."__' and gro_status =1");
		if (mysqli_num_rows($rant_h2) > 0)
		{		
			while($row_h2=mysqli_fetch_assoc($rant_h2))
			{
?>
                  <div class="col-md-2">
                    <ul class="dropdown-menu c-menu-type-inline">
                      <li> <a href="shop-product-search.php?id=<?php echo $row_h2['gro_id'] ?>"><?php echo $row_h2['gro_name'] ?></a> </li>
                    </ul>
                  </div>
                  <?php
			}
		}
		else
		{
			echo "گروه تعریف نشده";
		}
 ?>
                </div>
              </div>
            </li>
            <?php
	}
}
else
{
	echo "گروه تعریف نشده";
} 
			   $it = 0 ;
 foreach ($_SESSION["cart_item"] as $c_item){
  $it ++ ;
        $item_total += (str_replace(",","",$c_item["price"])*$c_item["quantity"]); 
  
 }?>
            <li class="c-cart-toggler-wrapper c-quick-sidebar-toggler-wrapper">
            	<a href="shop-cart.php" class="c-btn-icon c-cart-toggler">
            		<i class="icon-handbag c-cart-icon"></i>
            		<span class="c-cart-number c-theme-bg"><?php echo $it ; ?></span>
            	</a>
            </li>
            <!-- <li class="c-quick-sidebar-toggler-wrapper">
                                    <a href="#" class="c-quick-sidebar-toggler">
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                        <span class="c-line"></span>
                                    </a>
                                </li>-->
            <li class="c-search-toggler-wrapper"> <a href="#" class="c-btn-icon c-search-toggler"> <i class="fa fa-search"></i> </a> </li>
          </ul>
        </nav>
        <!-- END: MEGA MENU --> 
        <!-- END: LAYOUT/HEADERS/MEGA-MENU --> 
        <!-- END: HOR NAV --> 
      </div>
      <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART --> 
     <?php
session_start();
if(isset($_SESSION["cart_item"])){
    

  ?>

      <!-- BEGIN: CART MENU -->
      <div class="c-cart-menu">
        <div class="c-cart-menu-title">
          <p class="c-cart-menu-float-l c-font-sbold"><?php echo $it ; ?> مورد</p>
          <p class="c-cart-menu-float-r c-theme-font c-font-sbold"><?php echo number_format($item_total) ; ?></p>
        </div>
        <ul class="c-cart-menu-items">
      <?php 
   foreach ($_SESSION["cart_item"] as $c_item){
    ?> 
          <li>
            <div class="c-cart-menu-close"> <a href="" class="c-theme-link" id="remove" code="<?php echo $c_item["code"]; ?>">×</a> </div>
            <img src="<?php echo $c_item["img"] ; ?>" />
            <div class="c-cart-menu-content">
              <p><?php echo $c_item["quantity"]; ?> x <span class="c-item-price c-theme-font"><?php echo number_format($c_item["price"]); ?></span> </p>
              <a href="shop-product-details.php?code=<?php echo $c_item["code"]; ?>" class="c-item-name c-font-sbold"><?php echo $c_item["name"]; ?></a> </div>
          </li>
          <?php
       }

    ?>  
       </ul>
        <div class="c-cart-menu-footer"> <a href="shop-cart.php" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">مشاهده سبد خرید</a> <a href="shop-checkout.php" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">پرداخت</a> </div>
      </div>
      <!-- END: CART MENU --> 
      <?php
   }
		else { 
		
		?>
		<!-- BEGIN: CART MENU -->
      <div class="c-cart-menu">
        <div class="c-cart-menu-footer"> <a class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">سبد خرید خالی است</a>
        </div>
      </div>
      <!-- END: CART MENU --> 
		<?php
		
		}
   ?>
      <!-- END: LAYOUT/HEADERS/QUICK-CART --> 
    </div>
  </div>
</header>
<!-- END: HEADER --> 
<!-- END: LAYOUT/HEADERS/HEADER-1 --> 

<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">بازیابی رمز عبور</h3>
        <p>برای بازیابی رمز عبور آدرس ایمیل خود را وارد نمائید .</p>
        <form method="post">
          <div class="form-group">
            <label for="forget-email" class="hide">ایمیل</label>
            <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="ایمیل" name="forget-email">
          </div>
          <div class="form-group">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="send" value="forget">ارسال</button>
            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">بازگشت به صفحه ورود</a> </div>
        </form>
      </div>
      <div class="modal-footer c-no-border"> <span class="c-text-account">حساب کاربری ندارید ؟</span> <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">ثبت نام !</a> </div>
    </div>
  </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM --> 
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">ایجاد یک حساب کاربری</h3>
        <p>لطفا با پر کردن فرم زیر در ایجاد حساب کاربری ما را یاری فرمائید .</p>
        <form method="post">
          <div class="form-group">
            <label for="signup-email" class="hide">ایمیل</label>
            <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="ایمیل" name="e_name_c">
          </div>
          <div class="form-group">
            <label for="signup-username" class="hide">نام کاربری</label>
            <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="نام کاربری" name="u_name_c">
          </div>
          <div class="form-group">
            <label for="signup-fullname" class="hide">نام خانوادگی</label>
            <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="نام خانوادگی" name="f_name_c">
          </div>
          <div class="form-group">
          	<label for="signup-password" class="hide">پسورد</label>
          	<input type="password" class="form-control input-lg c-square" id="signup-password" placeholder="پسورد" name="p_name_c">
          </div>
          <div class="form-group">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="send" value="create">ورود</button>
            <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">بازگشت به صفحه ورود</a> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM --> 
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content c-square">
      <div class="modal-header c-no-border">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <h3 class="c-font-24 c-font-sbold">وقت بخیر !</h3>
        <p>امروز یک روز عالی بسازید !</p>
        <form method="post">
          <div class="form-group">
            <label for="login-email" class="hide">ایمیل</label>
            <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="ایمیل" name="e_name_v">
          </div>
          <div class="form-group">
            <label for="login-password" class="hide">رمز عبور</label>
            <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="رمز عبور" name="p_name_v">
          </div>
          <div class="form-group">
            <div class="c-checkbox">
              <input type="checkbox" id="login-rememberme" class="c-check" name="co_mem">
              <label for="login-rememberme" class="c-font-thin c-font-17"> <span></span> <span class="check"></span> <span class="box"></span> مرا به خاطر بسپار </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="send" value="login">ورود</button>
            <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">رمز عبور خود را فراموش نموده اید ؟</a> </div>
        </form>
      </div>
      <div class="modal-footer c-no-border"> <span class="c-text-account">حساب کاربری ندارید ؟</span> <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">ثبت نام !</a> </div>
    </div>
  </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM --> 
