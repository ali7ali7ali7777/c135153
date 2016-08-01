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
    <html lang="en" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>پنل ادمین</title>

        <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
        <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
        <link href="assets/css/yekan.css" rel="stylesheet" type="text/css">
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">


        <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>

        <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/uploaders/fileinput.min.js"></script>
        
        <script type="text/javascript" src="assets/js/core/app.js"></script>
    	<script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>
        <script type="text/javascript" src="assets/js/pages/layout_fixed_custom.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>

    </head>

    <body class="navbar-top">

        <?php require_once "menu1.php"; ?>


            <div class="page-container">

                <div class="page-content">

                    <?php require_once "menu2.php"; ?>

                        <div class="content-wrapper">
                            <?php
                                if(get_safe_post($mysqlicheck,"submit") == "save" && get_safe_post($mysqlicheck,"name") != "" && get_safe_post($mysqlicheck,"single") != "" )
                                {
                                    $name = get_safe_post($mysqlicheck,"name");
                                    $single = get_safe_post($mysqlicheck,"single");
                                    $sql = "INSERT INTO unit(unit_id,unit_name,unit_single) VALUES (null,'$name','$single')";

                                    $result = $mysqlicheck->query($sql);


                                    if (!$result) {
                                        echo'
                                            <div class="alert alert-danger alert-styled-left alert-bordered">
                                                            <button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
                                                            ارسال اطلاعات با <span class="text-semibold">خطا</span> رو برو گردید.
                                                        </div>';
                                    }else{
                                        echo'<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                                                    <button data-dismiss="alert" class="close" type="button"><span>×</span><span class="sr-only">Close</span></button>
                                                    با موفقیت ثبت گردید .

                                                </div>';
                                    }


                                }

                            ?>
                                <div class="content">
                                        <form method="post" class="" enctype="multipart/form-data">
                                            <div class="panel panel-flat">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">ایجاد کالا جدید</h5>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li>
                                                                <a data-action="collapse"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="panel-body">
                                                    <div class="row ">
                                                        <div class="col-md-6">
                                                            <div class="col-md-8 content-group-lg">
                                                                <label>نام واحد :</label>
                                                                <input type="text" name="name" class="form-control" required="required" placeholder="نام واحد را وارد کنید" value="">
                                                            </div>
                                                            <div class="col-md-8 content-group-lg">
                                                                <label>تعداد هر واحد :</label>
                                                                <input type="text" name="single" class="form-control" placeholder="تعداد واحد">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="col-md-8">
                                                                <label>نکته :</label>
                                                                <label>میشه اینجا یه نکته نوشت . </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="text-right">
                                                        <button type="submit" name="submit" value="save" class="btn btn-primary"> ایجاد و ذخیره <i class="icon-arrow-left13 position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        </div>

                </div>

            </div>
            <script type="text/javascript">
            /*    $(document).ready(function () {
                    $.post('serv.php', {
                        'change2': 'change2',
                        'infochange2': '<?php // echo $gro_id ?>'
                    }, function (result2) {

                        setTimeout(function () {
                            $('#change-item').html(result2).hide().slideDown('slow');
                        }, 10);

                    });
                    $('#gp-edit-select').on('change', function () {

                        $.post('serv.php', {
                            'change2': 'change2',
                            'infochange2': this.value
                        }, function (result2) {

                            setTimeout(function () {
                                $('#change-item').html(result2).hide().slideDown('slow');
                                $(function() {
                                  var salt = Math.floor(Math.random() * 1000),
                                    time;

                                  function load_script() {
                                    $('#myscript').remove();
                                    $.getScript("assets/js/pages/uploader_bootstrap.js?s=" + salt, function() {
                                      $('script:last').attr('id', 'myscript');
                                      salt = Math.floor(Math.random() * 1000);
                                      time = setTimeout(function() {
                                        load_script();
                                      }, 30 * 1000);
                                    });
                                  }
                                  load_script();
                                });
                            }, 10);

                        });

                    });
                });*/
            </script>
    </body>

    </html>