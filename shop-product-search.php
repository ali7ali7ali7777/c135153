
        <?php require_once "header.php";?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
<?php
		
$select = "SELECT * FROM object where object_status = 1 " ;
if (isset($_GET['send']) )
{
	$send = get_safe_get($mysqlicheck,"send");
	if($send == 'search')
	{
		$gro = get_safe_get($mysqlicheck,"gro");
		$word = get_safe_get($mysqlicheck,"word");
		$sort = get_safe_get($mysqlicheck,"sort");
		$order = get_safe_get($mysqlicheck,"order");
		
		if ($gro == "" && $word != "")
			$select = "SELECT * FROM object where object_status = 1 and object_name like '%".$word."%' " ;
		elseif($gro != "" && $word != "")
			$select = "SELECT * FROM object where object_status = 1 and object_name like '%".$word."%' and object_code like '".$gro."%'" ;
		elseif($gro != "" && $word == "")
			$select = "SELECT * FROM object where object_status = 1 and object_code like '".$gro."%'" ;
		elseif($sort != "" && $order != "")
		{
			if($gro == "" && $word != "")
				$select = "SELECT * FROM object where object_status = 1 and object_name like '%".$word."%'  ORDER BY ".$sort." ".$order ;
			elseif($gro != "" && $word == "")
				$select = "SELECT * FROM object where object_status = 1 and object_code like '".$gro."%' ORDER BY ".$sort." ".$order ;
			elseif($gro != "" && $word != "")
				$select = "SELECT * FROM object where object_status = 1 and object_name like '%".$word."%' and object_code like '".$gro."%' ORDER BY ".$sort." ".$order ;
			elseif($gro == "" && $word == "")
				$select = "SELECT * FROM object where object_status = 1 ORDER BY ".$sort." ".$order ;
		}
	}
	else
		echo "<script>window.location.href='shop-product-search.php';</script>";
}
				
?>
			<div class="container">
                <div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU-2 -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">نمایش دسته بندیها</h3>
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
                            <select class="form-control c-square c-theme" id="ghone">
                                <option value="" <?php if($gro == "") echo 'selected="selected"'; ?>>همه دسته بندیها</option>
                                <?php
$rant_s1 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '___' and gro_status =1");
if (mysqli_num_rows($rant_s1) > 0)
{	
	while($row_s1=mysqli_fetch_assoc($rant_s1))
	{								
                               echo '<option value="'.$row_s1['gro_kod'].'"';
		if(strlen($gro) == 3 && $gro == $row_s1['gro_kod']) echo 'selected="selected"';
		elseif(strlen($gro) > 3 && substr($gro ,0 ,3) == $row_s1['gro_kod']) echo 'selected="selected"';
							   echo '>'.$row_s1['gro_name'].'</option>';
	}
}
									?>
                             </select>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">دسترسی</label>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-3-1" class="c-check">
                                <label for="checkbox-sidebar-3-1">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>موجود نمی باشد (3)</p>
                                </label>
                            </div>
                            <div class="c-checkbox c-checkbox-height">
                                <input type="checkbox" id="checkbox-sidebar-3-2" class="c-check">
                                <label for="checkbox-sidebar-3-2">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p>موجود می باشد (23)</p>
                                </label>
                            </div>
                        </li>
                        <li>
                            <label class="control-label c-font-uppercase c-font-bold">محدوده قیمت</label>
                            <div class="c-price-range-box input-group">
                                <div class="c-price input-group col-md-6 pull-right">
                                    <input type="text" class="form-control c-square c-theme" placeholder="از">
                                    <span class="input-group-addon c-square c-theme">ریال</span> </div>
                                <div class="c-price input-group col-md-6 pull-right">
                                    <input type="text" class="form-control c-square c-theme" placeholder="تا">
                                    <span class="input-group-addon c-square c-theme">ریال</span> </div>
                            </div>
                        </li>
<?php
$rant_s5 = mysqli_query($mysqlicheck,"SELECT max(object_sale) as max,min(object_sale) as min  FROM `object` where object_status = 1");
	
	$row_s5=mysqli_fetch_assoc($rant_s5);
	
		$min = $row_s5['min'] ;
		$max = $row_s5['max'] ;
	
?>						
   						<li>
    						<label class="control-label c-font-uppercase c-font-bold">محدوده قیمت با نوار لغزان</label>
                            <p><?php echo number_format($min).' - '.number_format($max) ; ?> ريال</p>
                            <div class="c-price-range-slider c-theme-1 input-group">
                                <input type="text" class="c-price-slider" value="" data-slider-min="<?php echo $min ;?>" data-slider-max="<?php echo $max ;?>" data-slider-step="5000" data-slider-value="<?php echo '['.$min.','.$max.']';?>"> </div>
                        </li>
<?php
$rant_s6 = mysqli_query($mysqlicheck,"SELECT object_pupolar FROM object where object_status = 1");
	$i5 = 0 ;
	$i4 = 0 ;
	$i3 = 0 ;
	$i2 = 0 ;
	$i1 = 0 ;
	$i0 = 0 ;
						
	while($row_s6=mysqli_fetch_assoc($rant_s6))
	{
		$te = $row_s6['object_pupolar'];
		
		if($te == 0)
			$i0 ++ ;
		elseif(0 < $te && $te <= 1)
			$i1 ++ ;
		elseif(1 < $te && $te <= 2)
			$i2 ++ ;
		elseif(2 < $te && $te <= 3)
			$i3 ++ ;
		elseif(3 < $te && $te <= 4)
			$i4 ++ ;
		elseif(4 < $te && $te <= 5)
			$i5 ++ ;
		
	}
?>
                        <li class="c-margin-b-40">
                            <label class="control-label c-font-uppercase c-font-bold">بررسی رتبه</label>
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
                                        <span class="fa fa-star c-theme-font"></span> (<?php echo $i5 ;?>) </p>
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
                                        <span class="fa fa-star c-theme-font"></span> (<?php echo $i4 ;?>) </p>
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
                                        <span class="fa fa-star c-theme-font"></span> (<?php echo $i3 ;?>) </p>
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
                                        <span class="fa fa-star c-theme-font"></span> (<?php echo $i2 ;?>) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-5" class="c-check">
                                <label for="checkbox-sidebar-2-5">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">
                                        <span class="fa fa-star c-theme-font"></span> (<?php echo $i1 ;?>) </p>
                                </label>
                            </div>
                            <div class="c-checkbox">
                                <input type="checkbox" id="checkbox-sidebar-2-6" class="c-check">
                                <label for="checkbox-sidebar-2-6">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    <p class="c-review-star">هنوز رتبه دهی نشده (<?php echo $i0 ;?>)</p>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <!-- END: CONTENT/SHOPS/SHOP-FILTER-SEARCH-1 -->
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
<?php
$rant_s2 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '___' and gro_status =1");
if (mysqli_num_rows($rant_s2) > 0)
{	$i = 1 ;
	while($row_s2=mysqli_fetch_assoc($rant_s2))
	{	
						?>				
                        <li class="c-dropdown <?php if(substr($gro ,0 ,3) == $row_s2['gro_kod']) echo 'c-active';?> c-open">
                            <a href="javascript:;" class="c-toggler"><?php echo $row_s2['gro_name']; ?>
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                          <?php
		$rant_s3 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '".$row_s2['gro_kod']."__' and gro_status =1");
		if (mysqli_num_rows($rant_s3) > 0)
		{		
			while($row_s3=mysqli_fetch_assoc($rant_s3))
			{
								?>                       
                                <li <?php if($gro == $row_s3['gro_kod']) echo 'class="c-active"';?>>
                                    <a href="shop-product-search.php?send=search&gro=<?php echo $row_s3['gro_kod'] ?>"><?php echo $row_s3['gro_name']; ?></a>
                                </li>
                                <?php
			}
		}
								?>
                            </ul>
                      </li>
<?php
	}
}
?>
                    </ul>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU-2 -->
                </div>
                <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-ADVANCED-SEARCH-1 -->
                    <form class="c-shop-advanced-search-1" method="get">
                      <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">کلمه مورد جستجو</label>
                                <input type="text" class="form-control c-square c-theme input-lg" placeholder="کلمه مورد نظر را جهت جستجو وارد نمائید " name="word" value="<?php echo $word ; ?>"> </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="control-label">دسته بندی</label>
                                <select class="form-control c-square c-theme input-lg" name="gro">
                                    <option value="" <?php if($gro == "") echo 'selected="selected"'; ?>>همه دسته بندیها</option>
                                       <?php
$rant_s4 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_kod like '_____' and gro_status =1");
if (mysqli_num_rows($rant_s4) > 0)
{	
	while($row_s4=mysqli_fetch_assoc($rant_s4))
	{								
                               echo '<option value="'.$row_s4['gro_kod'].'"';
							   if($gro == $row_s4['gro_kod']) echo 'selected="selected"';
								echo '>'.$row_s4['gro_name'].'</option>';
	}
}
									?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" role="group">
                            <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" name="send" value="search">
                                <i class="fa fa-search"></i>جستجو</button>
                            <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold" >دوباره</button>
                        </div>
                    </form>
                    <!-- END: CONTENT/SHOPS/SHOP-ADVANCED-SEARCH-1 -->
                    <div class="c-margin-t-30"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
<?php

		$rant_s6 = mysqli_query($mysqlicheck,$select);
		if (mysqli_num_rows($rant_s6) > 0)
		{
?>
                    <div class="c-shop-result-filter-1 clearfix form-inline">
                        <div class="c-filter">
                            <label class="control-label c-font-16">مشاهده:</label>
                            <select class="form-control c-square c-theme c-input">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100">100</option>
                            </select>
                        </div>
                        <div class="c-filter">
                            <label class="control-label c-font-16">مرتب سازی بر اساس:</label>
                            <select class="form-control c-square c-theme c-input" id="sort">
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>" <?php if($sort == "" && $order =="") echo 'selected="selected"' ;?> >پیش فرض</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_name&order=ASC" <?php if($sort == "object_name" && $order =="ASC") echo 'selected="selected"' ;?> >نام ( الف - ی )</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_name&order=DESC" <?php if($sort == "object_name" && $order =="DESC") echo 'selected="selected"' ;?> >نام ( ی - الف )</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_sale&order=ASC" <?php if($sort == "object_sale" && $order =="ASC") echo 'selected="selected"' ;?> >قیمت ( کم &gt; زیاد )</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_sale&order=DESC" <?php if($sort == "object_sale" && $order =="DESC") echo 'selected="selected"' ;?> >قیمت ( زیاد &gt; کم )</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_pupolar&order=DESC" <?php if($sort == "object_pupolar" && $order =="DESC") echo 'selected="selected"' ;?> >امتیاز ( بیشترین )</option>
                                <option value="<?php echo $gro ; ?>&word=<?php echo $word ; ?>&sort=object_pupolar&order=ASC" <?php if($sort == "object_pupolar" && $order =="ASC") echo 'selected="selected"' ;?> >امتیاز ( کمترین )</option>
                            </select>
                        </div>
                    </div>
                    <!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
                    <div class="c-margin-t-20"></div>
                    <!-- BEGIN: CONTENT/SHOPS/SHOP-2-8 -->
<?php

			while($row_s6=mysqli_fetch_assoc($rant_s6))
			{
				$se = $row_s6['object_visit'];
		
				if($se == 0)
					$star = 0 ;
				elseif(0 < $te && $te <= 1)
					$star = 1 ;
				elseif(1 < $te && $te <= 2)
					$star = 2 ;
				elseif(2 < $te && $te <= 3)
					$star = 3 ;
				elseif(3 < $te && $te <= 4)
					$star = 4 ;
				elseif(4 < $te && $te <= 5)
					$star = 5 ;
				
				$dir = 'images/object/'.$row_s6['object_id'].'/';
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
						$src = "images/object/".$row_s6['object_id']."/".$resultimg[0] ;	
						}
					}

				}
				if ($resultimg[0] == "")
				{
					$src = "images/none.jpg";
				}
		?>                             
                    
                    <div class="row c-margin-b-40" data-stars="<?php echo $star ; ?>",  data-price="<?php echo $row_s6['object_sale'] ; ?>">
                        <div class="c-content-product-2 c-bg-white">
                            <div class="col-md-4">
                                <div class="c-content-overlay">
                                    <div class="c-label c-label-right c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">تخفیف</div>
                                    <div class="c-label c-label-left c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">جدید</div>
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="shop-product-details.php?selected=<?php echo $row_s6['object_id']; ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">جزئیات</a>
                                        </div>
                                    </div>
                                    <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url(<?php echo $src; ?>);"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-info-list">
                                    <h3 class="c-title c-font-bold c-font-22 c-font-dark">
                                        <a class="c-theme-link" href="shop-product-details.php?selected=<?php echo $row_s6['object_id']; ?>"><?php echo $row_s6['object_name']; ?></a>
                                    </h3>
                                    <p class="c-desc c-font-16 c-font-thin">توضیحات.</p>
                                    <?php
								if ($row_s6['object_sale_di'] != "0")
								echo	'<p class="c-price c-font-22 c-font-thin"> '.number_format($row_s6['object_sale_di']).' ريال  &nbsp;
											<span class="c-font-22 c-font-line-through c-font-red"> '.number_format($row_s6['object_sale']).' ريال </span>
										</p>';
								else 
								echo   '<p class="c-price c-font-22 c-font-thin"> '.number_format($row_s6['object_sale']).' ريال  
                                    </p>';
							?>
                               </div>
                                <div>
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-shopping-cart"></i>اضافه نمودن به سبد خرید </button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">
                                        <i class="fa fa-heart-o"></i>اضافه نمودن به علاقه مندیها </button>
                                </div>
                            </div>
                        </div>
                    </div>
   <?php
           }
		
                     
       ?>                     
                    
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
                    <?php
           }
		else
			echo '<div class="alert alert-warning" role="alert">محصولی مرتبط با جستجوی شما در دسته بندی مورد نظر یافت نشد  .</div>';	
                     
       ?>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
        