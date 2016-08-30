<div class="c-layout-sidebar-menu c-theme ">
                    <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                    <div class="c-sidebar-menu-toggler">
                        <h3 class="c-title c-font-uppercase c-font-bold">پروفایل من</h3>
                        <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                            <span class="c-line"></span>
                        </a>
                    </div>
                    <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                        <li class="c-dropdown c-open">
                            <a href="javascript:;" class="c-toggler">پروفایل من
                                <span class="c-arrow"></span>
                            </a>
                            <ul class="c-dropdown-menu">
                                <li <?php if ($requst_from == "shop-customer-dashboard.php" ) echo 'class="c-active"'; ?>>
                                    <a href="shop-customer-dashboard.php">داشبورد من</a>
                                </li>
                                <li <?php if ($requst_from == "shop-customer-profile.php" ) echo 'class="c-active"'; ?>>
                                    <a href="shop-customer-profile.php">ویرایش پروفایل</a>
                                </li>
                                <li <?php if ($requst_from == "shop-order-history.php" ) echo 'class="c-active"'; ?>>
                                    <a href="shop-order-history.php">تاریخچه سفارشها</a>
                                </li>
                                <li <?php if ($requst_from == "shop-customer-addresses.php" ) echo 'class="c-active"'; ?>>
                                    <a href="shop-customer-addresses.php">آدرسهای من</a>
                                </li>
                                <li <?php if ($requst_from == "shop-product-wishlist.php" ) echo 'class="c-active"'; ?>>
                                    <a href="shop-product-wishlist.php">لیست علاقه مندی های من</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
</div>
   
<?php   
              
               $sel_p = mysqli_query($mysqlicheck,"SELECT * FROM `user` WHERE `user_id` = '".$user_id."' ");
				if ($sel_p->num_rows > 0)
				{
					$row_p=mysqli_fetch_assoc($sel_p);
				}
             ?>              