

        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
        <?php
$sh_fa = $_SESSION["check"];
			
$sel_co = mysqli_query($mysqlicheck,"SELECT * FROM `object_out` WHERE `object_out_person_id` = '".$user_id."' and `object_out_factor` = '".$sh_fa."'");
if ($sel_co->num_rows > 0)
{
	$to_jo = 0;
	
	while($row_co=mysqli_fetch_assoc($sel_co))
	{
		$to_jo += $row_co['object_out_sales_price']*$row_co['object_out_qun'];
		$da_kh = $row_co['object_out_date'];
		$sh_da = $row_co['object_out_payment'];
		$na_er = $row_co['object_out_h_s'];
	}
	
	if ($na_er == 2)
		$to_er = 0 ;
	elseif ($na_er == 3)
		$to_er = 50000 ;
	elseif ($na_er == 4)
		$to_er = 80000 ;
	
	if ($sh_da == 1)
		$da_p =  'آپ' ;
	elseif ($sh_da == 2)
		$da_p =  'به ملت' ;
	elseif ($sh_da == 3)
		$da_p =  'به سامان' ;
	
	$to_ko = number_format($to_jo + $to_er) ;
		

			
			
			?>
        	<!-- BEGIN: PAGE CONTENT -->
            <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
                <div class="container">
                    <div class="c-shop-order-complete-1 c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">پرداخت نهایی و تکمیل شد</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <div class="c-theme-bg">
                            <p class="c-message c-center c-font-white c-font-20 c-font-sbold">
                                <i class="fa fa-check"></i> متشکرم. سفارش شما دریافت شد. </p>
                        </div>
                        <!-- BEGIN: ORDER SUMMARY -->
                        <div class="row c-order-summary c-center">
                            <ul class="c-list-inline list-inline">
                                <li>
                                    <h3>شماره سفارش</h3>
                                    <p>#<?php echo $sh_fa ; ?></p>
                                </li>
                                <li>
                                    <h3>تاریخ خرید</h3>
                                    <p><?php echo $da_kh ; ?></p>
                                </li>
                                <li>
                                    <h3>مجموع پرداختی</h3>
                                    <p><?php echo $to_ko ; ?></p>
                                </li>
                                <li>
                                    <h3>درگاه پرداخت</h3>
                                    <p><?php echo $da_p; ?></p>
                                </li>
                            </ul>
                        </div>
                        <!-- END: ORDER SUMMARY -->
                        <!-- BEGIN: BANK DETAILS -->
                        <!--<div class="c-bank-details c-margin-t-30 c-margin-b-30">
                            <p class="c-margin-b-20">Make your payment directly into our account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                            <h3 class="c-margin-t-40 c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">OUR BANK DETAILS</h3>
                            <h3 class="c-border-bottom">اکانت نام : &nbsp;
                                <span class="c-font-thin">Themehats</span>
                            </h3>
                            <ul class="c-list-inline list-inline">
                                <li>
                                    <h3>Account Number</h3>
                                    <p>12345678901234567</p>
                                </li>
                                <li>
                                    <h3>Sort Code</h3>
                                    <p>123</p>
                                </li>
                                <li>
                                    <h3>Bank</h3>
                                    <p>Bank Name</p>
                                </li>
                                <li>
                                    <h3>BIC</h3>
                                    <p>12345</p>
                                </li>
                            </ul>
                        </div>-->
                        <!-- END: BANK DETAILS -->
                        <!-- BEGIN: ORDER DETAILS -->
                        <div class="c-order-details c-shop-cart-page-1">
                            <div class="c-border-bottom hidden-sm hidden-xs">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">سفارش</h3>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">شرح</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">قیمت واحد</h3>
                                    </div>
                                    <div class="col-md-2">
                                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">جمع</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN: PRODUCT ITEM ROW -->
       <?php
	$sel_co3 = mysqli_query($mysqlicheck,"SELECT * FROM `object_out` WHERE `object_out_person_id` = '".$user_id."' and `object_out_factor` = '".$sh_fa."'");
	if ($sel_co3->num_rows > 0)
	{
		while($row_co3 = mysqli_fetch_assoc($sel_co3))
		{
			$te_kh = $row_co3['object_out_qun'];
			$gh_kh = $row_co3['object_out_sales_price'];
			
			$res_co2 = mysqli_query($mysqlicheck,"SELECT * FROM `object` WHERE `object_code` = '".$row_co3['object_out_code']."'");
			if ($res_co2->num_rows > 0)
			{
				while($row_co2=mysqli_fetch_assoc($res_co2))
				{
					$dir = 'images/object/'.$row_co2['object_id'].'/';
					// iterate
					if(!$dir)
					{
						 $src = "images/none.jpg";
					}
					else
					{
						// image extensions
						$extensions = array('jpg', 'jpeg', 'png');
						// init result
						$resultimg = array();
						// directory to scan
						$directory = new DirectoryIterator($dir);
						foreach ($directory as $fileinfo)
						{
							// must be a file
							if ($fileinfo->isFile())
							{
								// file extension
								$extension = strtolower(pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION));
								// check if extension match
								if (in_array($extension, $extensions))
								{
									// add to result
									$resultimg[] = $fileinfo->getFilename();
								}
							$src = "images/object/".$row_co2['object_id']."/".$resultimg[0] ;	
							}
						}

					}
					if ($resultimg[0] == "")
					{
						$src = "images/none.jpg";
					}			
			
	
                           
					?>
					<div class="c-border-bottom c-row-item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 c-image">
                                        <div class="c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details.php?code=<?php echo $row_co2['object_code']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">توضیحات</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                                <img width="100%" class="img-responsive" src="<?php echo $src; ?>"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-8">
                                        <ul class="c-list list-unstyled">
                                            <li class="c-margin-b-25">
                                                <a href="shop-product-details.php?code=<?php echo $row_co2['object_code']; ?>" class="c-font-bold c-font-22 c-theme-link"><?php echo $row_co2['object_name']; ?></a>
                                            </li>
                                            <li class="c-margin-b-10">Color: Blue</li>
                                            <li>Size: S</li>
                                            <li>تعداد: &times; <?php echo $te_kh ; ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">قیمت واحد</p>
                                        <p class="c-font-sbold c-font-uppercase c-font-18"><?php echo number_format($gh_kh); ?> ريال</p>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">جمع</p>
                                        <p class="c-font-sbold c-font-18"><?php echo number_format($te_kh*$gh_kh) ?> ريال</p>
                                    </div>
                                </div>
                            </div>
             <?php 
				}
			}
        }
	}
							?>
                            <!-- END: PRODUCT ITEM ROW -->
                          <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row c-margin-t-20">
                                <div class="col-md-2 col-md-offset-7 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-right c-font-22 c-font-grey-2 shop-cart-table">جمع فاکتور:</h3>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-22"><?php echo number_format($to_jo) ;  ?> ريال</h3>
                                </div>
                            </div> 
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row">
                                <div class="col-md-2 col-md-offset-7 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-left c-font-22 c-font-grey-2 shop-cart-table" >هزینه ارسال:</h3>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-22"><?php echo number_format($to_er) ;  ?> ريال</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row">
                                <div class="col-md-2 col-md-offset-7 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-right c-font-22 c-font-grey-2 shop-cart-table">جمع کل:</h3>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-22"><?php echo $to_ko ;  ?> ريال</h3>
                                </div>
                            </div>
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                        </div>
                        <!-- END: ORDER DETAILS -->
                        <!-- BEGIN: CUSTOMER DETAILS -->
                        <?php
						
$sel_p = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ");
if ($sel_p->num_rows > 0)
{
	$row_p=mysqli_fetch_assoc($sel_p);
}
?>
                        <div class="c-customer-details row" data-auto-height="true">
                            <div class="col-md-6 col-sm-6 c-margin-t-20">
                                <div data-height="height">
                                    <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">اطلاعات مشتری</h3>
                                    <ul class="list-unstyled">
                                        <li>نام: <?php echo $user_name; ?></li>
                                        <li>تلفن: <?php echo $row_p['user_tell1']; ?></li>
                                        <li>فکس: <?php echo $row_p['user_tell2']; ?></li>
                                        <li>موبایل: <?php echo $row_p['user_mobile']; ?></li>
                                        <li>ایمیل:
                                            <a href="mailto:<?php echo $row_p['user_email']; ?>" class="c-theme-color"><?php echo $row_p['user_email']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-t-20">
                                <div data-height="height">
                                    <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold">آدرس قبض</h3>
                                    <ul class="list-unstyled">
                                        <li><?php echo $user_name; ?></li>
                                        <li><?php if($row_p['user_address2'] == "")
											echo $row_p['user_address1'];
											else
											echo $row_p['user_address2'];?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 c-margin-t-20">
                                <div data-height="height">
                                    <h3 class=" c-margin-b-20 c-font-uppercase c-font-22 c-font-bold"></h3>
                                    <ul class="list-unstyled">
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END: CUSTOMER DETAILS -->
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       