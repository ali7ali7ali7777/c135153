
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

			<div class="container">
                
                <?php require_once "profile.php"; ?>
                
                
                <div class="c-layout-sidebar-content ">
                   
                                      
<?php                   
$code = get_safe_post($mysqlicheck,"code");
$action = get_safe_post($mysqlicheck,"action");

if(!empty($action))
{
	switch($action)
	{
		case 'add':
			$res_aw = mysqli_query($mysqlicheck,"SELECT * FROM wishlist WHERE wish_user_id = ".$user_id." and wish_object_code = ".$code);
			if ($res_aw->num_rows == 0){ 
				$sq_w = 'INSERT INTO wishlist(wish_user_id, wish_object_code) VALUES ('.$user_id.','.$code .')';
				$res_w = $mysqlicheck->query($sq_w);}
		break;
		case 'remove':
			$res_rw = mysqli_query($mysqlicheck,"DELETE FROM `wishlist` WHERE wish_user_id = ".$user_id. " and wish_object_code = ".$code);
		break;	
	}
}
					
?>
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">علاقه مندیهای من</h3>
                        <div class="c-line-left"></div>
                    </div>
<?php
						
$res_w1 = mysqli_query($mysqlicheck,"SELECT * FROM wishlist WHERE wish_user_id = ".$user_id );
if ($res_w1->num_rows > 0)
{
	?>
                    <div class="c-shop-wishlist-1">
                        <div class="c-border-bottom hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">محصول</h3>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">شرح کالا</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">موجودی</h3>
                                </div>
                                <div class="col-md-2">
                                    <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">قیمت</h3>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: PRODUCT ITEM ROW -->
                        
<?php
	while($row_w1=mysqli_fetch_assoc($res_w1))
	{
		$res_w2 = mysqli_query($mysqlicheck,"SELECT * FROM `object` WHERE `object_code` = '".$row_w1['wish_object_code']."'");
		if ($res_w2->num_rows > 0)
		{
			while($row_w2=mysqli_fetch_assoc($res_w2))
			{
				$dir = 'images/object/'.$row_w2['object_id'].'/';
					// iterate
					if(!$dir){
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
							$src = "images/object/".$row_w2['object_id']."/".$resultimg[0] ;	
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
                                <div class="col-md-3 col-sm-12">
                                    <div class="c-content-overlay">
                                        <div class="c-overlay-wrapper">
                                            <div class="c-overlay-content">
                                                <a href="shop-product-details.php?code=<?php echo $row_w2['object_code']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">توضیحات</a>
                                            </div>
                                        </div>
                                        <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                            <img width="100%" class="img-responsive" src="<?php echo $src ; ?>"> </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-8">
                                    <ul class="c-list list-unstyled">
                                        <li class="c-margin-b-25">
                                            <a href="shop-product-details.php?code=<?php echo $row_w2['object_code']; ?>" class="c-font-bold c-font-22 c-theme-link"><?php echo $row_w2['object_name']; ?></a>
                                        </li>
                                        <li class="c-margin-b-10">Color: Blue</li>
                                        <li>Size: S</li>
                                        <li class="c-margin-t-30">
                                            <div class="form-group" role="group">
                                                <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" code="<?php echo $row_w2['object_code']; ?>" id="ad_to">
                                                    <i class="fa fa-shopping-cart" ></i>اضافه کردن به سبد خرید</button>
                                                <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold" code="<?php echo $row_w2['object_code']; ?>" id="re_w">حذف از لیست</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">موجودی</p>
                                    <p class="c-font-sbold c-font-18"><?php echo 'موجود'; ?></p>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">قیمت واحد</p>
                                    <p class="c-font-sbold c-font-uppercase c-font-18"><?php if ($row_w2['object_sale_di'] == "") echo $row_w2['object_sale']; else echo $row_w2['object_sale_di']; ?></p>
                                </div>
                            </div>
                        </div>
                        
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
					
	echo "محصولی در لیست علاقه مندی شما ثبت نشده است .";				
}	
	
?>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       