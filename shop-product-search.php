
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>جستجوی کالا</title>
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
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU-2 -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-FILTER-SEARCH-1 -->
                    <ul class="c-shop-filter-search-1 list-unstyled">
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">دسته بندی</label>
                            <select class="form-control c-square c-theme">
                                <option value="0">All Categories</option>
                                <option value="1">Art</option>
                                <option value="2">Baby</option>
                                <option value="3">Books</option>
                                <option value="4">Business &amp; Industrial</option>
                                <option value="5">Cameras &amp; Photo</option>
                                <option value="6">Cell Phones &amp; Accessories</option>
                                <option value="7">Clothing, Shoes &amp; Accessories</option>
                                <option value="8">Coins &amp; Paper Money</option>
                                <option value="9">Collectibles</option>
                                <option value="10">Computers/Tablets &amp; Networking</option>
                            </select>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Availability</label>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-3-1" class="c-check">
                                <label for="checkbox-sidebar-3-1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>Not Available (3)</p>
                                </label>
                            </div>
                            <div class="c-checkbox c-checkbox-height">
                                <input type="checkbox" id="checkbox-sidebar-3-2" class="c-check">
                                <label for="checkbox-sidebar-3-2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>In Stock (23)</p>
                                </label>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range</label>
                            <div class="c-price-range-box input-group">
                                <div class="c-price input-group col-md-6 pull-right">
                                    <input type="text" class="form-control c-square c-theme" placeholder="from">
                                    <span class="input-group-addon c-square c-theme">ریال</span> </div>
                                <div class="c-price input-group col-md-6 pull-right">
                                    <input type="text" class="form-control c-square c-theme" placeholder="to">
                                    <span class="input-group-addon c-square c-theme">ریال</span> </div>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-1 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Range Slider Color</label>
                            <p>Price Range: $1 - $ 500</p>
                            <div class="c-price-range-slider c-theme-2 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-handle="square" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="[100,250]"> </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">Price Group</label>
                            <div class="input-group">
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-1" class="c-check">
                                    <label for="checkbox-sidebar-1-1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $0 - $10 (15) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-2" class="c-check">
                                    <label for="checkbox-sidebar-1-2">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $11 - $20 (17) </label>
                                </div>
                                <div class="c-checkbox">
                                    <input type="checkbox" id="checkbox-sidebar-1-3" class="c-check">
                                    <label for="checkbox-sidebar-1-3">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $21 - $30 (23) </label>
                                </div>
                                <div class="c-checkbox c-checkbox-height">
                                    <input type="checkbox" id="checkbox-sidebar-1-4" class="c-check">
                                    <label for="checkbox-sidebar-1-4">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> $31 - $40 (19) </label>
                                </div>
                            </div>
                        </li>
                        <li class="c-margin-b-40">
                            <label class="control-label c-font-uppercase c-font-bold">Review Rating</label>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-1" class="c-check">
                                <label for="checkbox-sidebar-2-1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span> (18) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-2" class="c-check">
                                <label for="checkbox-sidebar-2-2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span> (20) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-3" class="c-check">
                                <label for="checkbox-sidebar-2-3">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span> (9) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-4" class="c-check">
                                <label for="checkbox-sidebar-2-4">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span>
                                        <span class="fa fa-star c-theme-font"></span> (4) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-5" class="c-check">
                                <label for="checkbox-sidebar-2-5">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span> (1) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-6" class="c-check">
                                <label for="checkbox-sidebar-2-6">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">No yet rated (10)</p>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <!-- END: CONTENT/SHOPS/SHOP-FILTER-SEARCH-1 -->
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
                                        <i class="icon-social-dribbble"></i> Example Link</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bell"></i> Example Link</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-bubbles"></i> Example Link</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i> Example Link</a>
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
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU-2 -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ADVANCED-SEARCH-1 -->
                    <form class="c-shop-advanced-search-1">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Keywords or Item Number</label>
                                        <input type="text" class="form-control c-square c-theme input-lg" placeholder="Enter keywords or item number"> </div>
                                    <div class="col-md-6">
                                        <label class="control-label">&nbsp;</label>
                                        <select class="form-control c-square c-theme input-lg">
                                            <option value="1">All words, any order</option>
                                            <option value="2">Any words, any order</option>
                                            <option value="3">Exact words, exact order</option>
                                            <option value="4">Exact words, any order</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Exclude Words</label>
                                <input type="text" class="form-control c-square c-theme input-lg" placeholder="Enter exclude words from search"> </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">Category</label>
                                <select class="form-control c-square c-theme input-lg">
                                    <option value="0">All Categories</option>
                                    <option value="1">Art</option>
                                    <option value="2">Baby</option>
                                    <option value="3">Books</option>
                                    <option value="4">Business &amp; Industrial</option>
                                    <option value="5">Cameras &amp; Photo</option>
                                    <option value="6">Cell Phones &amp; Accessories</option>
                                    <option value="7">Clothing, Shoes &amp; Accessories</option>
                                    <option value="8">Coins &amp; Paper Money</option>
                                    <option value="9">Collectibles</option>
                                    <option value="10">Computers/Tablets &amp; Networking</option>
                                </select>
                            </div>
                        </div>
                        <div class="row c-margin-t-15">
                            <div class="form-group col-md-12">
                                <div class="c-checkbox c-toggle-hide" data-object-selector="c-advanced-search" data-animation-speed="600">
                                    <input type="checkbox" id="checkbox-1" class="c-check">
                                    <label for="checkbox-1">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Advanced Search </label>
                                </div>
                                <p class="help-block">See general
                                    <a href="#" class="c-theme-link c-font-bold">search tips</a> or
                                    <a href="#" class="c-theme-link c-font-bold">using advanced search options</a>
                                </p>
                            </div>
                        </div>
                        <div class="row c-advanced-search">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <h3 class="c-font-sbold c-font-uppercase c-font-20">Search including</h3>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-1-1" class="c-check">
                                        <label for="checkbox-1-1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Title and description </label>
                                    </div>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-1-2" class="c-check">
                                        <label for="checkbox-1-2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Completed listing </label>
                                    </div>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-1-3" class="c-check">
                                        <label for="checkbox-1-3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Sold listing </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="c-font-sbold c-font-uppercase c-font-20">Shipping options</h3>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-2-1" class="c-check">
                                        <label for="checkbox-2-1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Flat rate </label>
                                    </div>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-2-2" class="c-check">
                                        <label for="checkbox-2-2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Local delivery </label>
                                    </div>
                                    <div class="c-checkbox">
                                        <input type="checkbox" id="checkbox-2-3" class="c-check">
                                        <label for="checkbox-2-3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Local pickup </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Sort By</label>
                                    <select class="form-control c-square c-theme input-lg">
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
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">View Results</label>
                                            <select class="form-control c-square c-theme input-lg">
                                                <option value="1">All Items</option>
                                                <option value="2">Picture Gallery</option>
                                                <option value="3">Show Item Numbers</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Result Per Page</label>
                                            <select class="form-control c-square c-theme input-lg">
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                                <option value="150">150</option>
                                                <option value="200">200</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" role="group">
                            <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                <i class="fa fa-search"></i>Search</button>
                            <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Clear</button>
                        </div>
                    </form>
                    <!-- END: CONTENT/SHOPS/SHOP-ADVANCED-SEARCH-1 -->
                    <div class="c-margin-t-30"></div>
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
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-8 -->
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop3/20.jpg);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548 &nbsp;
                                        <span class="c-font-26 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>Add Cart </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>Add Wishlist </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop3/10.jpg);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details-2.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548 &nbsp;
                                        <span class="c-font-26 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>Add Cart </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>Add Wishlist </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop3/22.jpg);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548 &nbsp;
                                        <span class="c-font-26 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>Add Cart </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>Add Wishlist </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop3/21.jpg);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details-2.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548 &nbsp;
                                        <span class="c-font-26 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>Add Cart </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>Add Wishlist </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row c-margin-b-40">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
                                    <div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(assets/base/img/content/shop3/23.jpg);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details-2.html">Winter Coat</a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.</p>
                                    <p class="c-price c-font-26 c-font-thin">$548 &nbsp;
                                        <span class="c-font-26 c-font-line-through c-font-red">$600</span>
                                    </p>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>Add Cart </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>Add Wishlist </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-2-8 -->
                    <div class="c-margin-t-20"></div>
                    <ul class="c-content-pagination c-square c-theme pull-left">
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
