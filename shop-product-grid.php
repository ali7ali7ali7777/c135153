<!DOCTYPE html>
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
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Shop Home 1</title>
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

    <body class="c-layout-header-fixed c-layout-header-6-topbar c-layout-header-mobile-fixed c-page-on-scroll" >
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

            <div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-active c-open">
                            <a href="javascript:;" class="c-toggler">Active Section
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li class="c-active">
                                    <a href="#">Active Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-dropdown">
                            <a href="javascript:;" class="c-toggler">Sub Menu Section
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li class="c-dropdown">
                                    <a href="javascript:;" class="c-toggler">Sub Menu
                                        <span class="c-arrow"></span>
                                    </a>
                                    <ul class="c-dropdown-menu">
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li class="c-dropdown">
                                    <a href="javascript:;" class="c-toggler">Sub Menu
                                        <span class="c-arrow"></span>
                                    </a>
                                    <ul class="c-dropdown-menu">
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li class="c-dropdown">
                                            <a href="javascript:;" class="c-toggler">Sub Menu
                                                <span class="c-arrow"></span>
                                            </a>
                                            <ul class="c-dropdown-menu">
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-dropdown">
                            <a href="javascript:;" class="c-toggler">Section With Icons
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-social-dribbble"></i> نمونه لینک</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bell"></i> نمونه لینک </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bubbles"></i> نمونه لینک</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> نمونه لینک</a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-dropdown">
                            <a href="javascript:;" class="c-toggler">Expanded Section
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                            </ul>
                        </li>
                        <li class="c-dropdown">
                            <a href="javascript:;">Arrow Toggler
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li>
                                    <a href="#">Example Link</a>
                                </li>
                                <li class="c-dropdown">
                                    <a href="javascript:;">Sub Menu
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="c-dropdown-menu">
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url(assets/base/img/content/misc/feedback_box_2.png)">
                        <div class="c-content-title-1 c-margin-t-20">
                            <h3 class="c-font-uppercase c-font-bold">Have a question?</h3>
                            <div class="c-line-left"></div>
                            <form action="#">
                                <div class="input-group input-group-lg c-square">
                                    <input type="text" class="form-control c-square" placeholder="Ask a question" />
                                    <span class="input-group-btn">
                                        <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Go!</button>
                                    </span>
                                </div>
                            </form>
                            <p class="c-font-thin">Ask your questions away and let our dedicated customer service help you look through our FAQs to get your questions answered!</p>
                        </div>
                    </div>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-shop-result-filter-1 clearfix form-inline">
                        <div class="c-filter">
                            <label class="control-label c-font-16">Show:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100" selected>100</option>
                            </select>
                        </div>
                        <div class="c-filter">
                            <label class="control-label c-font-16">Sort&nbsp;By:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="#?sort=p.price&amp;order=DESC" selected>Price (High &gt; Low)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-margin-t-20"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-bs-grid-small-space">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/100.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Smartphone & Handset</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/83.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Camera Lens</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/95.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Shoes & Tie</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/98.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Smartphone & Handset</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/101.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/93.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Exclusive Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/96.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/53.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">iMac, iPad & iPhone</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/93.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/101.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Exclusive Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/100.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">Watches</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-b-20">
                                <div class="c-content-product-2 c-bg-white c-border">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop2/102.jpg);"></div>
                                    </div>
                                    <div class="c-info">
                                        <p class="c-title c-font-16 c-font-slim">iMac, iPad & iPhone</p>
                                        <p class="c-price c-font-14 c-font-slim">$548 &nbsp;
                                            <span class="c-font-14 c-font-line-through c-font-red">$600</span>
                                        </p>
                                    </div>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <div class="btn-group c-border-top" role="group">
                                            <a href="shop-product-wishlist.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                        </div>
                                        <div class="btn-group c-border-left c-border-top" role="group">
                                            <a href="shop-cart.html" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-2-7 -->
                    <div class="c-margin-t-20"></div>
                    <ul class="c-content-pagination c-square c-theme pull-right">
                        <li class="c-prev">
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="c-active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li class="c-next">
                            <a href="#">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64667612-1', 'themehats.com');
  ga('send', 'pageview');
</script>
</body>


</html>
