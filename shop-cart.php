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
            
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    <div class="c-shop-cart-page-1">
                        <div class="row c-cart-table-title">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
                            </div>
                            <div class="col-md-4 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Description</h3>
                            </div>
                            <div class="col-md-1 c-cart-ref">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">SKU</h3>
                            </div>
                            <div class="col-md-1 c-cart-qty">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
                            </div>
                            <div class="col-md-2 c-cart-price">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
                            </div>
                            <div class="col-md-1 c-cart-total">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
                            </div>
                            <div class="col-md-1 c-cart-remove"></div>
                        </div>
                        <!-- BEGIN: SHOPPING CART ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item 1</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="assets/base/img/content/shop2/24.jpg" /> </div>
                            <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                                <h3>
                                    <a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-22 c-font-dark">Winter Jacket</a>
                                </h3>
                                <p>Color: Blue</p>
                                <p>Size: S</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">SKU</p>
                                <p>120715</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
                                <div class="c-input-group c-spinner">
                                    <input type="text" class="form-control c-item-1" value="1">
                                    <div class="c-input-group-btn-vertical">
                                        <button class="btn btn-default" type="button" data_input="c-item-1">
                                            <i class="fa fa-caret-up"></i>
                                        </button>
                                        <button class="btn btn-default" type="button" data_input="c-item-1">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                <p class="c-cart-price c-font-bold">$147.00</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
                                <p class="c-cart-price c-font-bold">$147.00</p>
                            </div>
                            <div class="col-md-1 col-sm-12 c-cart-remove">
                                <a href="#" class="c-theme-link c-cart-remove-desktop">×</a>
                                <a href="#" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove item from Cart</a>
                            </div>
                        </div>
                        <!-- END: SHOPPING CART ITEM ROW -->
                        <!-- BEGIN: SHOPPING CART ITEM ROW -->
                        <div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title">Item 2</h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="assets/base/img/content/shop2/12.jpg" /> </div>
                            <div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
                                <h3>
                                    <a href="shop-product-details.html" class="c-font-bold c-theme-link c-font-22 c-font-dark">Comfortable Sports Wear Set</a>
                                </h3>
                                <p>Color: Grey</p>
                                <p>Size: S</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">SKU</p>
                                <p>160815</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">QTY</p>
                                <div class="c-input-group c-spinner">
                                    <input type="text" class="form-control c-item-2" value="1">
                                    <div class="c-input-group-btn-vertical">
                                        <button class="btn btn-default" type="button" data_input="c-item-2">
                                            <i class="fa fa-caret-up"></i>
                                        </button>
                                        <button class="btn btn-default" type="button" data_input="c-item-2">
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                                <p class="c-cart-price c-font-bold">$99.00</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">Total</p>
                                <p class="c-cart-price c-font-bold">$99.00</p>
                            </div>
                            <div class="col-md-1 col-sm-12 c-cart-remove">
                                <a href="#" class="c-theme-link c-cart-remove-desktop">×</a>
                                <a href="#" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove item from Cart</a>
                            </div>
                        </div>
                        <!-- END: SHOPPING CART ITEM ROW -->
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row c-margin-t-20">
                                <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2 shop-cart-table">Subtotal</h3>
                                </div>
                                <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-16">$246.00</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row">
                                <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-font-bold c-left c-font-16 c-font-grey-2 shop-cart-table" >Shipping Fee</h3>
                                </div>
                                <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-16">$15.00</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row">
                                <div class="col-md-2 col-md-offset-9 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2 shop-cart-table">Grand Total</h3>
                                </div>
                                <div class="col-md-1 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-16">$261.00</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        <div class="c-cart-buttons">
                            <a href="#" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Continue Shopping</a>
                            <a href="#" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
            <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
                <div class="container">
                    <div class="c-content-title-4">
                        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                            <span class="c-bg-white">Most Popular</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div data-slider="owl" data-items="4" data-auto-play="8000">
                            <div class="owl-carousel owl-theme c-theme owl-small-space">
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/18.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/27.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/21.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                            <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/22.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">HTC</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/20.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(assets/base/img/content/shop5/24.png);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
                                            <p class="c-price c-font-16 c-font-slim">$548 &nbsp;
                                                <span class="c-font-16 c-font-line-through c-font-red">$600</span>
                                            </p>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
            <!-- BEGIN: CONTENT/STEPS/STEPS-3 -->
            <div class="c-content-box c-size-md c-theme-bg">
                <div class="container">
                    <div class="c-content-step-3 c-font-white">
                        <div class="row">
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-truck"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Free shipping</h2>
                                    <em>Express delivery withing 3 days</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-gift"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">Daily Gifts</h2>
                                    <em>3 Gifts daily for lucky customers</em>
                                </div>
                                <span>&nbsp;</span>
                            </div>
                            <div class="col-md-4 c-steps-3-block">
                                <i class="fa fa-phone"></i>
                                <div class="c-steps-3-title">
                                    <h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">477 505 8877</h2>
                                    <em>24/7 customer care available</em>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/STEPS/STEPS-3 -->
            <!-- END: PAGE CONTENT -->
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
