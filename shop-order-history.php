
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
           <div class="container">
            
                <?php require_once "profile.php"; ?>
                
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">تاریخچه سفارش ها</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <?php
$res_h1 = mysqli_query($mysqlicheck,"SELECT * FROM object_out WHERE object_out_person_id = ".$user_id );
if ($res_h1->num_rows > 0)
{
     ?>
                    <div class="row c-margin-b-40 c-order-history-2">
                        <div class="row c-cart-table-title">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">تصویر</h3>
                            </div>
                            <div class="col-md-1 c-cart-ref">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">فاکتور</h3>
                            </div>
                            <div class="col-md-2 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">نام کالا</h3>
                            </div>
                            <div class="col-md-2 c-cart-price">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">قیمت</h3>
                            </div>
                            <div class="col-md-3 c-cart-total">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">درگاه پرداخت</h3>
                            </div>
                            <div class="col-md-2 c-cart-qty">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">تاریخ</h3>
                            </div>
                        </div>
                        <!-- BEGIN: ORDER HISTORY ITEM ROW -->

<?php
						

	while($row_h1=mysqli_fetch_assoc($res_h1))
	{
		$res_h2 = mysqli_query($mysqlicheck,"SELECT * FROM `object` WHERE `object_code` = '".$row_h1['object_out_code']."'");
		if ($res_h2->num_rows > 0)
		{
			$it = 1 ;
			while($row_h2=mysqli_fetch_assoc($res_h2))
			{
				$dir = 'images/object/'.$row_h2['object_id'].'/';
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
							$src = "images/object/".$row_h2['object_id']."/".$resultimg[0] ;	
							}
						}

					}
					if ($resultimg[0] == "")
					{
						$src = "images/none.jpg";
					}
  ?>                      
                        <div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">مورد <?php echo $it; ?></h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="<?php echo $src ; ?>" /> </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">شماره سفارش</p>
                                <p>#<?php echo $row_h1['object_out_factor']; ?></p>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6 c-cart-desc">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">نام کالا</p>
                                <p>
                                    <a href="shop-product-details.php?code=<?php echo $row_h2['object_code']; ?>" class="c-font-bold c-theme-link c-font-dark"><?php echo $row_h2['object_name']; ?></a>
                                </p>
                            </div>
                            <div class="clearfix col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">قیمت </p>
                                <p class="c-cart-price c-font-bold"><?php echo number_format($row_h1['object_out_sales_price']); ?></p>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">درگاه پرداخت </p>
                                <p class="c-cart-price c-font-bold"><?php if ($row_h1['object_out_payment'] == 1)
                                                                           echo  'آپ' ;
                                                                        elseif ($row_h1['object_out_payment']  == 2)
                                                                            echo 'به ملت' ;
                                                                        elseif ($row_h1['object_out_payment']  == 3)
                                                                           echo  'به سامان' ; ?>
                           </p>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">تاریخ</p>
                                <p><?php echo $row_h1['object_out_date']; ?></p>
                            </div>
                        </div>
                        <!-- END: ORDER HISTORY ITEM ROW -->
<?php
			}
		}
	}
?>
                        <!-- END: PRODUCT ITEM ROW -->
                    </div>
<?php
}
else
{
					
	echo "شما تاکنون محصولی را خریداری نکرده اید .";				
}	
	
?>
                    <!-- END: CONTENT/SHOPS/SHOP-ORDER-HISTORY-2 -->
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
       <?php require_once "footer.php"; ?>