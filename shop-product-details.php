<?php require_once "header.php"; ?>
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
  <?php 
$src = "images/none.jpg";
$object_id = get_safe_get($mysqlicheck,"selected");
$object_code = get_safe_get($mysqlicheck,"code");	

	
	
$rant_t1 = mysqli_query($mysqlicheck,'SELECT * FROM object 	where  object_id = "'.$object_id.'" or object_code = "'.$object_code.'"');
if (mysqli_num_rows($rant_t1) > 0)
{
	$row_t1=mysqli_fetch_assoc($rant_t1);
	
	$sql_v = 'UPDATE `object` SET `object_visit`= object_visit+1 WHERE object_id = "'.$row_t1['object_id'].'" or object_code = "'.$object_code.'"';	
	$res_v = $mysqlicheck->query($sql_v);
	
	$res_aw = mysqli_query($mysqlicheck,"SELECT * FROM wishlist WHERE wish_user_id = ".$user_id." and wish_object_code = ".$row_t1['object_code']);
	if ($res_aw->num_rows == 0)
		echo '<input name="ch_1" value="11" type="hidden">'; 
	
	if(!array_key_exists($row_t1['object_code'],$_SESSION["cart_item"]))
		echo '<input name="ch_2" value="11" type="hidden">';
	
     
                        
    $now = time(); // or your date as well
    $your_date = strtotime($row_t1['object_date']);
    $datediff = $now - $your_date;
    $check_d = floor($datediff / (60 * 60 * 24));
    
	$dir = 'images/object/'.$row_t1['object_id'].'/';
	// iterate
	if (!file_exists($dir) && !is_dir($dir))
    {
        
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
			}
		}

	}
	
}

?>
  
  <!-- BEGIN: PAGE CONTENT --> 
  <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
  <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
   <div class="container">
    <?php
if(isset($_POST['review'])){
		
$n_review = get_safe_post($mysqlicheck,"rg1");
$n_text = get_safe_post($mysqlicheck,"text");
$seve = get_safe_post($mysqlicheck,"review");
$n_date = $time.' '.$date;
			
	if($seve == "save" && $n_text != "" && $n_review != "")
	{	
		$sql_nn = 'INSERT INTO `comment`(`comment_user_id`, `Comment_user_re`, `comment_object_id`, `comment_text`, `comment_status`, `comment_data`) VALUES ("'.$user_id.'","'.$n_review.'","'.$row_t1['object_id'].'","'.$n_text.'",3,"'.$n_date.'")';
		$result_nn = $mysqlicheck->query($sql_nn);
		$sql_nv = 'UPDATE `object` SET `object_pupolar`= (`object_pupolar`+"'.$n_review.'")/2 WHERE object_id = "'.$row_t1['object_id'].'" or object_code = "'.$object_code.'"';	
		$res_nv = $mysqlicheck->query($sql_nv);
		if (!$result_nn && !$res_nv)
		{
				echo '<div class="alert alert-danger alert-dismissible" role="alert"> ارسال نظر با خطا مواجه گردید ، لطفاً مجدداً سعی نمائید .<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';  
		}
		else 
		{
			echo '<script>setTimeout(function(){window.location.href="shop-product-details.php?selected='.$row_t1["object_id"].'";}, 3000);</script>';
			echo '<div class="alert alert-success alert-dismissible" role="alert"> نظر شما با موفقیت ارسال شد.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
		}
		
	}
	else
	{
		echo '<div class="alert alert-warning alert-dismissible" role="alert">لطفاً نظر خود را نوشته و میزان رای خود را انتخاب کنید  .<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';
	}	
	
}   
   
  $rant_t1 = mysqli_query($mysqlicheck,'SELECT * FROM `comment` WHERE `comment_user_id` = "'.$user_id.'" and `comment_object_id` = "'.$row_t1['object_id'].'"');
		if (mysqli_num_rows($rant_t1) > 0)
		{
			$check_2 = 2 	;
		} 
   
   ?>
    
      <div class="c-shop-product-details-2">
        <div class="row">
          <div class="col-md-6">
            <div class="c-product-gallery">
              <div class="c-product-gallery-content">
                <?php
              $i_d = 0 ;
              while($i_d < 4)
              {
                  echo '<div class="c-zoom">
                           <img src="';
                            if($resultimg[$i_d] != "")
                            	echo "images/object/".$row_t1['object_id']."/".$resultimg[$i_d];
                            else
                            	echo $src ; 
                 echo '"></div>';
                 $i_d ++;
              }
           ?>
              </div>
              <div class="row c-product-gallery-thumbnail">
                <?php
                  $i_d = 0 ;
                   while($i_d < 4)
                   {
                        echo '<div class="col-xs-3 c-product-thumb">
								<img src="';
                        		if($resultimg[$i_d] != "")
                        			echo "images/object/".$row_t1['object_id']."/".$resultimg[$i_d];
					   			else
                        			echo $src ;
                        echo '"> </div>';
                       $i_d ++;
                   }
             ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="c-product-meta">
              <div class="c-content-title-1">
                <h3 class="c-font-uppercase c-font-bold"><?php echo $row_t1['object_name']; ?></h3>
                <div class="c-line-left"></div>
              </div>
              <div class="c-product-badge">
                <?php if ($row_t1['object_sale_di'] != 0) {?>
                <div class="c-product-sale">تخفیف</div>
                <?php }?>
                <?php if ($check_d < 8) {?>
                <div class="c-product-new">جدید</div>
                <?php }?>
              </div>
              <div class="c-product-review">
                <div class="c-product-rating">
                <?php $ip_r = $row_t1['object_pupolar'];
				while($ip_r > 0)
				{
					if ($ip_r >0 && $ip_r <1)
						echo '<i class="fa fa-star-half-o c-font-red"></i>';
					else
                		echo '<i class="fa fa-star c-font-red"></i>';
					$ip_r --;
				}
                ?>
                </div>
                <div class="c-product-write-review">
                  <button type="button" class="btn c-btn-red c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-toggle="modal" data-target="#exampleModal2" data-whatever="bootstrap">نوشتن نظر</button>
                  <div class="modal fade c-content-login-form" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content c-square">
                       
                        <form method="post">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                            <h4 class="modal-title" id="exampleModalLabel">نظر خود را ثبت نمائید</h4>
                          </div>
                          <div class="modal-body">
                           <?php if ($user_id != ""){ if ($check_2 != 2) {?>
                            <div class="form-group">
                              <div class="wrapper"> <span class="em">امتیاز :</span>
                                <input type="radio" id="r5" name="rg1" value="5" checked>
                                <label for="r5">&#10038;</label>
                                <input type="radio" id="r4" name="rg1" value="4">
                                <label for="r4">&#10038;</label>
                                <input type="radio" id="r3" name="rg1" value="3">
                                <label for="r3">&#10038;</label>
                                <input type="radio" id="r2" name="rg1" value="2">
                                <label for="r2">&#10038;</label>
                                <input type="radio" id="r1" name="rg1" value="1">
                                <label for="r1">&#10038;</label>
                              </div>
                            </div>
							<div class="form-group">
                              <label for="message-text" class="control-label">پیام شما :</label>
                              <textarea class="form-control c-square" id="message-text" name="text" rows="5"><?php echo $n_text; ?></textarea>
                            </div>
                            <?php }else {echo '<p style="text-align:justify;"><span class="c-theme-font">'.$user_name.'</span> عزیز شما قبلاً برای <span class="c-theme-font">'.$row_t1['object_name'].'</span> نظر خود را ثبت نموده اید .</p>';}} else { ?>
                        
                        	<p style="text-align:justify;">کاربر گرامی جهت استفاده از این امکان باید وارد سایت شده و سپس سعی نمائید .<br />
						  <br />
						  در صورتی که هنوز ثبت نام نکرده اید می توانید از لینک زیر ثبت نام نمائید .</p><br />
						  <p style="text-align:center;"><a href="login.php"><span class="c-theme-font">ورود یا ثبت نام جدید </span></a></p><?php } ?>
                          </div>
                          <div class="modal-footer">
                           <?php if ($user_id != "" && $check_2 != 2){?>
                            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase" name="review" value="save">ارسال نظر</button> <?php } ?>
                            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">انصراف </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="c-product-price">
                <?php if ($row_t1['object_sale_di'] != "0") echo number_format($row_t1['object_sale_di']); else echo number_format($row_t1['object_sale']); ?>
              </div>
              <div class="c-product-short-desc"> توضیح کوتاه کالا. </div>
              <input name="code" value="<?php echo $row_t1['object_code'] ?>" type="hidden">
              <input name="pic1" value="<?php echo "images/object/".$row_t1['object_id']."/".$resultimg[0]; ?>" type="hidden">
              <input name="pic2" value="<?php echo $resultimg[0]; ?>" type="hidden">
              <input name="id" value="<?php echo $row_t1['object_id']; ?>" type="hidden">
              <input name="user_id" value="<?php echo $user_id; ?>" type="hidden">
              <div class="row c-product-variant">
                <div class="col-sm-12 col-xs-12">
                  <p class="c-product-meta-label c-product-margin-1 c-font-uppercase c-font-bold">Size:</p>
                  <div class="c-product-size">
                    <select name="size">
                      <option value="S">S</option>
                      <option value="M">M</option>
                      <option value="L">L</option>
                      <option value="XL">XL</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12 col-xs-12 c-margin-t-20">
                  <div class="c-product-color">
                    <p class="c-product-meta-label c-font-uppercase c-font-bold">Color:</p>
                    <select name="color">
                      <option value="Red">Red</option>
                      <option value="Black">Black</option>
                      <option value="Beige">Beige</option>
                      <option value="White">White</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="c-product-add-cart c-margin-t-20">
                <div class="row">
                  <div class="col-sm-4 col-xs-12">
                    <div class="c-input-group c-spinner">
                      <p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
                      <input type="text" class="form-control c-item-1" value="1" name="quantity">
                      <div class="c-input-group-btn-vertical">
                        <button class="btn btn-default" type="button" data_input="c-item-1"> <i class="fa fa-caret-up"></i> </button>
                        <button class="btn btn-default" type="button" data_input="c-item-1"> <i class="fa fa-caret-down"></i> </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-xs-12 c-margin-t-20" id="ad_t">
                    <button  class="fix btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase " id="ad_s">اضافه کردن به سبد خرید</button>
                    <button  class="fix btn c-btn btn-lg c-font-bold c-font-white c-btn-red c-btn-square c-font-uppercase" id="ad_w">اضافه کردن به علاقه مندیها</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 --> 
  <!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
  <div class="c-content-box c-size-md c-no-padding">
    <div class="c-shop-product-tab-1" role="tabpanel">
      <div class="container">
        <ul class="nav nav-justified" role="tablist">
          <li role="presentation" class="active"> <a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">شرح کالا</a> </li>
          <li role="presentation"> <a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">اطلاعات اضافی</a> </li>
          <li role="presentation"> <a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">بررسی</a> </li>
        </ul>
      </div>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="tab-1">
          <div class="c-product-desc c-center">
            <div class="container"> <img src="assets/base/img/content/shop5/30.png" />
              <p> شرح کامل کالا </p>
              <p> شرح کامل کالا </p>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab-2">
          <div class="container">
            <p class="c-center"> <strong>Sizes:</strong> S, M, L, XL</p>
            <br>
            <p class="c-center"> <strong>Colors:</strong> Red, Black, Beige, White</p>
            <br/>
          </div>
          <div class="c-product-tab-meta-bg c-bg-grey c-center">
            <div class="container">
              <p class="c-product-tab-meta"> <strong>SKU:</strong> 1410SL</p>
              <p class="c-product-tab-meta"> <strong>Categories:</strong> <a href="#">Jacket</a>, <a href="#">Winter</a> </p>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab-3">
          <div class="container">
            <h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">بررسی برای <?php echo $row_t1['object_name']; ?> </h3>
            <?php
$rant_t2 = mysqli_query($mysqlicheck,'SELECT * FROM comment	where comment_object_id = "'.$row_t1['object_id'].'" ');
if (mysqli_num_rows($rant_t2) > 0)
{
	while($row_t2=mysqli_fetch_assoc($rant_t2))
		{
			if($row_t2['Comment_user_re'] == 1)
				$src_p_u = 'images/object/r1.jpg';
			elseif($row_t2['Comment_user_re'] == 2)
				$src_p_u = 'images/object/r2.jpg';
			elseif($row_t2['Comment_user_re'] == 3)
				$src_p_u = 'images/object/r3.jpg';
			elseif($row_t2['Comment_user_re'] == 4)
				$src_p_u = 'images/object/r4.jpg';
			elseif($row_t2['Comment_user_re'] == 5)
				$src_p_u = 'images/object/r5.jpg';
		
			$rant_t3 = mysqli_query($mysqlicheck,'SELECT * FROM user where user_id = "'.$row_t2['comment_user_id'].'" ');
			$row_t3=mysqli_fetch_assoc($rant_t3);
                         echo    '<div class="row c-margin-t-40">
                                    <div class="col-xs-6">
                                        <div class="c-user-avatar">
                                            <img src="'.$src_p_u.'" /> </div>
                                        <div class="c-product-review-name">
                                            <h3 class="c-font-bold c-font-24 c-margin-b-5">'.$row_t3['user_family'].'</h3>
                                            <p class="c-date c-theme-font c-font-14">'.$row_t2['comment_data'].'</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="c-product-rating c-right">';
										$ir = $row_t2['Comment_user_re'];
										while($ir > 0)
										{
                                           echo '<i class="fa fa-star c-font-red"></i>';
											$ir -- ;
										}
                                  echo '</div>
                                    </div>
                                </div>
                                <div class="c-product-review-content">
                                    <p> '.$row_t2['comment_text'].' </p>
                                </div>';
		}
}
?>
            <div class="row c-product-review-input">
              <button type="button" class="btn c-btn-red c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-toggle="modal" data-target="#exampleModal2" data-whatever="bootstrap">نوشتن نظر</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
  <div class="c-body">
    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content c-square">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" id="bast">×</span> </button>
            <h4 class="modal-title" id="myModalLabel">جهت اضافه به علاقه مندیها</h4>
          </div>
          <div class="modal-body">
            <?php if ($user_id == ""){?>
            <p style="text-align:justify;">کاربر گرامی جهت استفاده از این امکان باید وارد سایت شده و سپس سعی نمائید .<br />
              <br />
              در صورتی که هنوز ثبت نام نکرده اید می توانید از لینک زیر ثبت نام نمائید .</p><br />
              <p style="text-align:center;"><a href="login.php"><span class="c-theme-font">ورود یا ثبت نام جدید </span></a></p>
            <?php } elseif ($user_id != ""){?>
            <p class="3"><span class="c-theme-font"><?php echo $user_name; ?></span> عزیز <span class="c-theme-font"><?php echo $row_t1['object_name']; ?></span> به لیست علاقه مندیهای شما اضافه گردید . </p>
            <p class="2"><span class="c-theme-font"><?php echo $user_name; ?></span> عزیز <span class="c-theme-font"><?php echo $row_t1['object_name']; ?></span> قبلاً به لیست علاقه مندیهای شما اضافه گردیده است  . </p>
            <?php }?>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal" style="float: left;" id="bast">بستن</button>
            <?php if ($user_id != ""){?>
            <button type="button" class="btn c-btn-red c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal" style="float: left;" id="sh_wi">لیست علاقه مندیها</button>
            <?php }?>
          </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
  <div class="c-body">
    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content c-square">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" id="bast">×</span> </button>
            <h4 class="modal-title" id="myModalLabel">اضافه شدن به سبد خرید</h4>
          </div>
          <div class="modal-body">
            <p class="3" style="text-align:justify;">کاربر گرامی <span class="c-theme-font"><?php echo $row_t1['object_name']; ?></span> به سبد خرید شما اضافه گردید . </p>
            <p class="2" style="text-align:justify;">کاربر گرامی <span class="c-theme-font"><?php echo $row_t1['object_name']; ?></span> قبلا به سبد خرید شما اضافه گردیده می توانید از صفحه <a href="shop-cart.php"><span class="c-theme-font">سبد خرید</span></a> آنرا ویرایش نمائید . </p>
          </div>
          <div class="modal-footer" >
            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal" style="float: left;" id="bast">بستن</button>
            <button type="button" class="btn c-btn-red c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"  style="float: left;"  id="edame">ادامه خرید </button>
          </div>
        </div>
        <!-- /.modal-content --> 
      </div>
      <!-- /.modal-dialog --> 
    </div>
  </div>
  <!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
  <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
    <div class="container">
      <div class="c-content-title-4">
        <h3 class="c-font-uppercase c-center c-font-bold c-line-strike"> <span class="c-bg-white">Most Popular</span> </h3>
      </div>
      <div class="row">
        <div data-slider="owl" data-items="4" data-auto-play="8000">
          <div class="owl-carousel owl-theme c-theme owl-small-space">
            <?php
		$rant_i6 = mysqli_query($mysqlicheck,"SELECT * FROM object where object_status =1 ORDER BY object_pupolar DESC limit 6");
		if (mysqli_num_rows($rant_i5) > 0)
		{
			while($row_i6=mysqli_fetch_assoc($rant_i6))
			{   
				$dir = 'images/object/'.$row_i6['object_id'].'/';
				// iterate
				if(!$dir){
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
							
						}
					}

				}
				
		?>
            <div class="item">
              <div class="c-content-product-2 c-bg-white c-border">
                <div class="c-content-overlay">
                  <div class="c-label c-label-right c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">تخفیف</div>
                  <div class="c-label c-label-left c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">جدید</div>
                  <div class="c-overlay-wrapper">
                    <div class="c-overlay-content"> <a href="shop-product-details.php?selected=<?php echo $row_i6['object_id']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">جزئیات</a> </div>
                  </div>
                  <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(<?php if($resultimg[0] != "")
														echo "images/object/".$row_i6['object_id']."/".$resultimg[0] ;
														else
														echo $src; ?>);"></div>
                </div>
                <div class="c-info">
                  <p class="c-title c-font-18 c-font-slim"><?php echo $row_i6['object_name']; ?></p>
                  <p class="c-price c-font-16 c-font-slim"><?php echo $row_i6['object_sale_di']; ?> ريال &nbsp; <span class="c-font-16 c-font-line-through c-font-red"><?php echo $row_i6['object_sale']; ?> ريال</span> </p>
                </div>
                <div class="btn-group btn-group-justified" role="group">
                  <div class="btn-group c-border-top" role="group"> <a href="shop-product-wishlist.php?selected=<?php echo $row_i6['object_id']; ?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">علاقه مندیها</a> </div>
                  <div class="btn-group c-border-left c-border-top" role="group"> <a href="shop-cart.php?selected=<?php echo $row_i6['object_id']; ?>" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">سبد خرید</a> </div>
                </div>
              </div>
              <?php
           }
		}
                     
       ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END: CONTENT/SHOPS/SHOP-2-2 --> 
  <!-- END: PAGE CONTENT --> 
</div>
<!-- END: PAGE CONTAINER -->
<?php require_once "footer.php"; ?>
