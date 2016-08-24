
        <?php require_once "header.php"; ?>
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">

            <div class="container">
                
                   <?php require_once "profile.php"; ?>
                   
                   <div class="c-layout-sidebar-content ">
                    <!-- BEGIN: PAGE CONTENT -->
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-font-bold">ویرایش پروفایل</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <form class="c-shop-form-1">
                        <!-- BEGIN: ADDRESS FORM -->
                        <div class="">
                            <!-- BEGIN: BILLING ADDRESS -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">کشور</label>
                                    <select class="form-control c-square c-theme">
                                        <option value="1">Malaysia</option>
                                        <option value="2">Singapore</option>
                                        <option value="3">Indonesia</option>
                                        <option value="4">Thailand</option>
                                        <option value="5">China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">نام</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="نام"> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">نام خانوادگی</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="نام خانوادگی"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">آدرس</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="نام بلوار"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control c-square c-theme" placeholder="ادامه آدرس"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">شهر</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="شهر"> </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">کشور / استان</label>
                                            <select class="form-control c-square c-theme">
                                                <option value="0">انتخاب کن...</option>
                                                <option value="1">Malaysia</option>
                                                <option value="2">Singapore</option>
                                                <option value="3">Indonesia</option>
                                                <option value="4">Thailand</option>
                                                <option value="5">China</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">زیپ کد</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="زیپ کد"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">ایمیل</label>
                                            <input type="email" class="form-control c-square c-theme" placeholder="ایمیل"> </div>
                                        <div class="col-md-6">
                                            <label class="control-label">تلفن</label>
                                            <input type="tel" class="form-control c-square c-theme" placeholder="تلفن"> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: BILLING ADDRESS -->
                            <!-- BEGIN: PASSWORD -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">تغییر کلمه عبور</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="کلمه عبور"> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">نوشتن دوباره کلمه عبور</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="کلمه عبور">
                                    <p class="help-block">نکته: رمز عبور باید حداقل شش کاراکتر باشد.
                                        <br /> با استفاده از حروف کوچک ، حروف بزرگ ، اعداد و کاراکترهای خاص مانند ! " ? $ % ^ & ) کلمه عبور خود را قویتر نمایید.</p>
                                </div>
                            </div>
                            <!-- END: PASSWORD -->
                            <div class="row c-margin-t-30">
                                <div class="form-group col-md-12" role="group">
                                    <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">ارسال</button>
                                    <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">صرف نظر</button>
                                </div>
                            </div>
                        </div>
                        <!-- END: ADDRESS FORM -->
                    </form>
                    <!-- END: PAGE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END: PAGE CONTAINER -->
        <?php require_once "footer.php"; ?>
       