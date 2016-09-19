<?php require_once "header.php"; ?>

  <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
<?php
			
$code = get_safe_post($mysqlicheck,"code");
$action = get_safe_post($mysqlicheck,"action");

if (!empty(get_safe_post($mysqlicheck,"pic2")))
	$src = get_safe_post($mysqlicheck,"pic1");
else
	$src = "images/none.jpg"; 

if(!empty($action)) {
switch($action) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$product = mysqli_fetch_assoc(mysqli_query($mysqlicheck,'SELECT * FROM object where  object_code = "'.$code.'" '));
			
			if ($product["object_sale_di"] != "0")
				$price = $product["object_sale_di"];
			else
				$price = $product["object_sale"];
			
			$itemArray = array($product["object_code"]=>array('name'=>$product["object_name"], 'code'=>$product["object_code"], 'quantity'=>$_POST["quantity"], 'price'=>$price, 'img'=>$src));
			if(!empty($_SESSION["cart_item"])) {
				if(array_key_exists($product["object_code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($product["object_code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = $_SESSION["cart_item"]+$itemArray;
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($code == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}

		
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>    
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    <div class="c-shop-cart-page-1">
                       <div class="c-cart-buttons">
                            <a href="index.php" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase ">ادامه خرید</a>
                            <a href="shop-checkout.php" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">پرداخت</a>
                        </div>
						<br>
                        <div class="row c-cart-table-title">
                            <div class="col-md-2 c-cart-image">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">تصویر کالا</h3>
                            </div>
                            <div class="col-md-3 c-cart-desc">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">شرح کالا</h3>
                            </div>
                            <div class="col-md-1 c-cart-ref">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">کد کالا</h3>
                            </div>
                            <div class="col-md-1 c-cart-qty">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">تعداد</h3>
                            </div>
                            <div class="col-md-2 c-cart-price">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">قیمت واحد</h3>
                            </div>
                            <div class="col-md-2 c-cart-total">
                                <h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">جمع</h3>
                            </div>
                            <div class="col-md-1 c-cart-remove"></div>
                        </div>
                        <!-- BEGIN: SHOPPING CART ITEM ROW -->
                        
                        
   <?php
	$it = 1 ;
	foreach ($_SESSION["cart_item"] as $c_item){
		?>
			
				
				<div class="row c-cart-table-row">
                            <h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">مورد <?php echo $it ; ?></h2>
                            <div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
                                <img src="<?php echo $c_item["img"] ; ?>" /> </div>
                            <div class="col-md-3 col-sm-9 col-xs-7 c-cart-desc">
                                <h3>
                                    <a href="shop-product-details.php?code=<?php echo $c_item["code"]; ?>" class="c-font-bold c-theme-link c-font-22 c-font-dark"><?php echo $c_item["name"]; ?></a>
                                </h3>
                                <p>رنگ: Blue</p>
                                <p>سایز: S</p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-ref">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">کد کالا</p>
                                <p><?php echo $c_item["code"]; ?></p>
                            </div>
                            <div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">تعداد</p>
                                <div class="c-input-group c-spinner" >
                                    <input type="text" class="form-control c-item-<?php echo $it ; ?>" value="<?php echo $c_item["quantity"]; ?>" name="quantity" >
                                    <div class="c-input-group-btn-vertical" >
                                        <button class="btn btn-default" type="button" data_input="c-item-<?php echo $it ; ?>" code="<?php echo $c_item["code"]; ?>" id="quant" >
                                            <i class="fa fa-caret-up" ></i>
                                        </button>
                                        <button class="btn btn-default" type="button" data_input="c-item-<?php echo $it ; ?>" code="<?php echo $c_item["code"]; ?>" id="quant" >
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">قیمت واحد</p>
                                <p class="c-cart-price c-font-bold"><?php echo number_format($c_item["price"]); ?> ريال</p>
                            </div>
                            <?php
								$to_item = ($c_item["price"]*$c_item["quantity"]);
							?>
                            <div class="col-md-2 col-sm-3 col-xs-6 c-cart-total">
                                <p class="c-cart-sub-title c-theme-font c-font-uppercase c-font-bold">جمع</p>
                                <p class="c-cart-price c-font-bold"><?php echo number_format($to_item) ;  ?> ريال</p>
                            </div>
                            <div class=" col-md-1 col-sm-12 c-cart-remove">
									<a href=""  class="c-theme-link c-cart-remove-desktop" id="remove" code="<?php echo $c_item["code"]; ?>" title="حذف از کارت">×</a>
									<a href=""  class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase" code="<?php echo $c_item["code"]; ?>" id="remove">حذف کردن از کارت</a>
							</div>
						</div>
				
			
	
				
				<?php
		$it ++ ;
        $item_total += $to_item ;
		}
		?>
                        
                        
                        
                        
                        
                        <!-- END: SHOPPING CART ITEM ROW -->
                      
                        <!-- BEGIN: SUBTOTAL ITEM ROW -->
                        <div class="row">
                            <div class="c-cart-subtotal-row c-margin-t-20">
                                <div class="col-md-2 col-md-offset-8 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2 shop-cart-table">جمع فاکتور</h3>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-6 c-cart-subtotal-border">
                                    <h3 class="c-font-bold c-font-16"><?php echo number_format($item_total);  ?> ريال</h3>
                                </div>
                            </div> 
                        </div>
                        <!-- END: SUBTOTAL ITEM ROW -->
                       <div class="c-cart-buttons">
                            <a href="index.php" class="btn c-btn btn-lg c-btn-red c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">ادامه خرید</a>
                            <a href="" class="btn c-btn btn-lg c-btn-yellow-1 c-btn-square c-font-white c-font-bold c-font-uppercase " id="empty">خالی کردن سبد</a>
                            <a href="shop-checkout.php" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">پرداخت</a>
                        </div>
                    </div>
                </div>
            </div>
              <?php
}
else { ?>
			<!-- BEGIN: CONTENT/SHOPS/SHOP-CART-EMPTY -->
            <div class="c-content-box c-size-lg">
                <div class="container">
                    <div class="c-shop-cart-page-1 c-center">
                        <i class="fa fa-frown-o c-font-dark c-font-50 c-font-thin "></i>
                        <h2 class="c-font-thin c-center">سبد خرید شما خالی است</h2>
                        <a href="index.php" class="btn c-btn btn-lg c-btn-dark c-btn-square c-font-white c-font-bold c-font-uppercase">ادامه خرید</a>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/SHOPS/SHOP-CART-EMPTY -->
<?php }
?>
            <!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
            <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
                                    <?php
		$rant_i6 = mysqli_query($mysqlicheck,"SELECT * FROM object where object_status =1 ORDER BY object_pupolar DESC limit 6");
		if (mysqli_num_rows($rant_i6) > 0)
		{
		?>
            <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
                <div class="container">
                    <div class="c-content-title-4">
                        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                            <span class="c-bg-white">محبوبترینها</span>
                        </h3>
                    </div>
                    <div class="row">
                        <div data-slider="owl" data-items="4" data-auto-play="8000">
                            <div class="owl-carousel owl-theme c-theme owl-small-space">
                               
                               
    <?php                           
                               
       	while($row_i6=mysqli_fetch_assoc($rant_i6))
			{   
				$dir = 'images/object/'.$row_i6['object_id'].'/';
				// iterate
				if (!file_exists($dir) && !is_dir($dir)) 
                {
					 $src = "images/none.jpg";
				}
				elseif (file_exists($dir) && is_dir($dir))
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
						$src = "images/object/".$row_i6['object_id']."/".$resultimg[0] ;	
						}
					}

				}
				if ($resultimg[0] == "")
				{
					$src = "images/none.jpg";
				}
                $now = time(); // or your date as well
                $your_date = strtotime($row_i6['object_date']);
                $datediff = $now - $your_date;
                $check_d = floor($datediff / (60 * 60 * 24));
		?>         
                                <div class="item">
                                    <div class="c-content-product-2 c-bg-white c-border">
                                        <div class="c-content-overlay">
                                            <?php if ($row_i6['object_sale_di'] != 0) {?>
                                            <div class="c-label c-label-right c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">تخفیف</div><?php }?>
                                            <?php if ($check_d < 8) {?>
                                            <div class="c-label c-label-left c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">جدید</div><?php } ?>
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="shop-product-details.php?selected=<?php echo $row_i6['object_id']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">توضیحات</a>
                                                </div>
                                            </div>
                                            <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(<?php echo $src; ?>);"></div>
                                        </div>
                                        <div class="c-info">
                                            <p class="c-title c-font-18 c-font-slim"><?php echo $row_i6['object_name']; ?>
                                            <p><?php $ip_r = $row_i6['object_pupolar'];
                                        while($ip_r > 0)
                                        {
                                            if ($ip_r >0 && $ip_r <1)
                                                echo '<i class="fa fa-star-half-o c-font-red fa-flip-horizontal"></i>';
                                            else
                                                echo '<i class="fa fa-star c-font-red"></i>';
                                            $ip_r --;
                                        }
                                            $ip_e = 5 - $row_i6['object_pupolar'];
                                        while($ip_e >= 1)
                                        {
                                            echo '<i class="fa fa-star-o c-font-red"></i>';
                                            $ip_e --;
                                        }   
                                        ?>
                                   <span style="float: left;font-size: 14px">بازدید: <?php echo $row_i6['object_visit'] ; ?></span></p>
                                             <?php
                                                if ($row_i6['object_sale_di'] != "0")
                                                echo	'<p class="c-price c-font-16 c-font-slim"> '.number_format($row_i6['object_sale_di']).' ريال  &nbsp;
                                                            <span class="c-font-16 c-font-line-through c-font-red"> '.number_format($row_i6['object_sale']).' ريال </span>
                                                        </p>';
                                                else 
                                                echo   '<p class="c-price c-font-16 c-font-slim"> '.number_format($row_i6['object_sale']).' ريال  
                                                    </p>';
                                            ?>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <div class="btn-group c-border-top" role="group">
                                                <a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">علاقه مندیها</a>
                                            </div>
                                            <div class="btn-group c-border-left c-border-top" role="group">
                                                <a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php }?>
            <!-- END: CONTENT/SHOPS/SHOP-2-2 -->
         
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
 
