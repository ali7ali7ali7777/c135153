
         <?php require_once "header.php";?>

<!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

<?php 
			
$rant_c1 = mysqli_query($mysqlicheck,"SELECT * FROM `contact`");
		if (mysqli_num_rows($rant_c1) > 0)
		{	
		$row_c1=mysqli_fetch_assoc($rant_c1);
		}
		else
		{
			echo "الطفا ارتباط با ما را تکمیل نمائید.";
		}
if(isset($_POST['submit'])){
		
$co_name = get_safe_post($mysqlicheck,"name");
$co_email = get_safe_post($mysqlicheck,"email");
$co_tel = get_safe_post($mysqlicheck,"tel");
$co_text = get_safe_post($mysqlicheck,"message");
$seve = get_safe_post($mysqlicheck,"submit");
$co_date = $time.' '.$date;
			
	if ($user_id == "")
	{
		if( $seve == "save" && ($co_name == ""  || $co_email == "" || $co_tel == "" || $co_text == "" ))
		{	
			$mas_c = 3;
		}
		elseif($seve == "save" && $co_name != "" && $co_email != "" && $co_tel != "" && $co_text != "" )
		{
			$sql_c="INSERT INTO comment ( comment_text, comment_name, comment_email, comment_tel, comment_status, comment_data) VALUES ( '".$co_text."', '".$co_name."', '".$co_email."', '".$co_tel."', 3 , '".$co_date."')";
			$result_c = $mysqlicheck->query($sql_c);
			if (!$result_c)
			{
					$mas_c = 1;  
			}
			else 
			{
				echo "<script>setTimeout(function(){window.location.href='page-contact.php';}, 3000); 
				</script>";
				$co_name ='';
				$co_email = '';
				$co_tel = '';
				$co_text = '';
				$mas_c = 2;
			}

		}
	}
	elseif($user_id != "")
	{
		if( $seve == "save" && $co_text == "" )
		{	
			$mas_c = 3;
		}
		elseif($seve == "save" && $co_text != "" )
		{
			$sql_c1="INSERT INTO comment ( comment_user_id,comment_text, comment_status, comment_data) VALUES ('".$user_id."', '".$co_text."', 3 , '".$co_date."')";
			$result_c1 = $mysqlicheck->query($sql_c1);
			if (!$result_c1)
			{
					$mas_c = 1 ;  
			}
			else 
			{
				echo "<script>setTimeout(function(){window.location.href='page-contact.php';}, 3000); 
				</script>";
				$co_name ='';
				$co_email = '';
				$co_tel = '';
				$co_text = '';
				$mas_c = 2;
			}

		}
	}
}
?>           
           
           
           
            <!-- BEGIN: PAGE CONTENT -->
           <!-- BEGIN: CONTENT/CONTACT/FEEDBACK-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <div class="c-content-contact-1 c-option-1">
                   		<div class="c-body">
                   <?php 
                   if ($mas_c == 2)
					{
                        echo    "<div class=\"alert alert-success alert-dismissible\" role=\"alert\"> نظر شما با موفقیت ارسال شد.
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                </div>";
					}
					else if ($mas_c == 1 )
					{
                        echo   "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\"> ارسال نظر با خطا مواجه گردید ، لطفاً دوباره سعی نمائید .
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                </div>";
					}
					else if ($mas_c == 3 )
					{
                        echo   '<div class="alert alert-warning alert-dismissible" role="alert">
								لطفا تمامی قسمتها را پر نمائید .
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                </div>';
					}
					?> 
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-body c-re">
                                    <h3 class="c-font-uppercase c-font-bold">ارتباط با ما</h3>
                                        <div class="c-line-left"></div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">آدرس</div>
                                        <p><?php echo $row_c1['mac'] ?></p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">اطلاعات تماس</div>
                                        <p>
                                            <strong>تلفن : </strong> <?php echo $row_c1['tel_1'].' - '. $row_c1['tel_2'].' - '.'0'.$row_c1['kod'];?>
                                            <br/>
                                            <strong>فکس : </strong> <?php echo $row_c1['fax']; ?>
                                            <br/>
                                            <strong>موبایل : </strong> <?php echo '0'.$row_c1['mobile']; ?>
                                            <br/>
                                            <strong>ایمیل : </strong> <?php echo $row_c1['email']; ?>
                                         </p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">دیگر</div>
                                        <p><?php echo $row_c1['field'] ?></p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">اجتماعی</div>
                                        <br/>
                                        <ul class="c-content-iconlist-1 c-theme">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-youtube-play"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <p class="c-font-lowercase"><?php if ($user_name != "") echo '<span class="c-theme-font">'.$user_name.'</span> عزیز ';?>
                                        از طریق فرم زیر می توانید با ما در تماس باشید.</p>
                                    </div>
                                    <form method="post">
                                       <?php if ($user_id == "") {?>
                                        <div class="form-group">
                                            <input type="text" placeholder="نام شما" class="form-control c-square c-theme input-lg" value="<?php echo $co_name; ?>" name="name"> </div>
                                        <div class="form-group">
                                            <input type="email" placeholder="ایمیل شما" class="form-control c-square c-theme input-lg" value="<?php echo $co_email; ?>" name="email"> </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="تلفن تماس" class="form-control c-square c-theme input-lg" value="<?php echo $co_tel; ?>" name="tel"> </div>
                                            <?php }?>
                                        <div class="form-group">
                                            <textarea rows="8" name="message" placeholder="نوشتن نظر در اینجا ..." class="form-control c-theme c-square input-lg" name="text"><?php echo $co_text ?></textarea>
                                        </div>
                                        <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square" name="submit" value="save">ارسال</button>
       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/CONTACT/FEEDBACK-1 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       