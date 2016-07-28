<?php
include("inc_db.php");



if(get_safe_post($mysqlicheck,'method3')== 'change3'){
	
	$info3 = get_safe_post($mysqlicheck,'info3');

	$sql3 = "update gro set gro_status='2' WHERE gro_id='$info3'";
	if($mysqlicheck->query($sql3) === TRUE) {
		echo "ok3";
	}else{
		die();
	}
	
}
if(get_safe_post($mysqlicheck,'method4')== 'change4'){
	
	$info4 = get_safe_post($mysqlicheck,'info4');

	$sql4 = "update gro set gro_status='1' WHERE gro_id='$info4'";
	if($mysqlicheck->query($sql4) === TRUE) {
		echo "ok4";
	}else{
		die();
	}
	
}

////// group title   ****
if(get_safe_post($mysqlicheck,'change')== 'change'){
	
	$info_change = get_safe_post($mysqlicheck,'infochange');

	$table = mysqli_query($mysqlicheck,"SELECT * FROM gro_title WHERE gro_title_id='$info_change'");
    while($rows=mysqli_fetch_assoc($table))
    {
        $mm = $rows['gro_title_id'];
        $mm1 = $rows['gro_title_m1'];
        $mm2 = $rows['gro_title_m2'];
        $mm3 = $rows['gro_title_m3'];
        $mm4 = $rows['gro_title_m4'];
        $mm5 = $rows['gro_title_m5'];
        $mm6 = $rows['gro_title_m6'];
        $mm7 = $rows['gro_title_m7'];
        $mm8 = $rows['gro_title_m8'];
        $mm9 = $rows['gro_title_m9'];
        $mm10 = $rows['gro_title_m10'];
        $mm11 = $rows['gro_title_m11'];
        $mm12 = $rows['gro_title_m12'];
        $mm13 = $rows['gro_title_m13'];
        $mm14 = $rows['gro_title_m14'];
        $mm15 = $rows['gro_title_m15'];

        $datachange = '
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">کد کالا :</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" disable placeholder="نام این فیلد قابل تغییر نیست" value="نام این فیلد قابل تغییر نیست">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">نام کالا :</label>
            <div class="col-lg-9">
                <input type="text" name="m1" class="form-control" value="نام این فیلد قابل تغییر نیست" placeholder="نام این فیلد قابل تغییر نیست ">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مدل :</label>
            <div class="col-lg-9">
                <input type="text" name="m2" class="form-control" value="'. $mm2.'" placeholder="مدل">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">سازنده :</label>
            <div class="col-lg-9">
                <input type="text" name="m3" class="form-control" value="'. $mm3.'" placeholder="سازنده">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">تعداد :</label>
            <div class="col-lg-9">
                <input type="text" name="m4" class="form-control" value="'. $mm4.'" placeholder="تعداد">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">تاریخ :</label>
            <div class="col-lg-9">
                <input type="text" name="m5" class="form-control" value="'. $mm5.'" placeholder="تاریخ">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 1 :</label>
            <div class="col-lg-9">
                <input type="text" name="m6" class="form-control" value="'. $mm6.'" placeholder="مشخصه 1">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 2 :</label>
            <div class="col-lg-9">
                <input type="text" name="m7" class="form-control" value="'. $mm7.'" placeholder="مشخصه 2">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 3 :</label>
            <div class="col-lg-9">
                <input type="text" name="m8" class="form-control" value="'. $mm8.'" placeholder="مشخصه 3">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 4 :</label>
            <div class="col-lg-9">
                <input type="text" name="m9" class="form-control" value="'. $mm9.'" placeholder="مشخصه 4">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 5 :</label>
            <div class="col-lg-9">
                <input type="text" name="m10" class="form-control" value="'. $mm10.'" placeholder="مشخصه 5">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 6 :</label>
            <div class="col-lg-9">
                <input type="text" name="m11" class="form-control" value="'. $mm11.'" placeholder="مشخصه 6">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 7 :</label>
            <div class="col-lg-9">
                <input type="text" name="m12" class="form-control" value="'. $mm12.'" placeholder="مشخصه 7">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 8 :</label>
            <div class="col-lg-9">
                <input type="text" name="m13" class="form-control" value="'. $mm13.'" placeholder="مشخصه 8">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 9 :</label>
            <div class="col-lg-9">
                <input type="text" name="m14" class="form-control" value="'. $mm14.'" placeholder="مشخصه 9">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">مشخصه 10 :</label>
            <div class="col-lg-9">
                <input type="text" name="m15" class="form-control" value="'. $mm15.'" placeholder="مشخصه 10">
            </div>
        </div>';
        
    }
	echo $datachange;
}

////// object create   ****
if(get_safe_post($mysqlicheck,'change2')== 'change2'){
	
	$info_change2 = get_safe_post($mysqlicheck,'infochange2');

	$table2 = mysqli_query($mysqlicheck,"SELECT * FROM gro_title WHERE gro_title_id='$info_change2'");
    while($rows2=mysqli_fetch_assoc($table2))
    {
        $mm = $rows2['gro_title_id'];
        $mm1 = $rows2['gro_title_m1'];
        $mm2 = $rows2['gro_title_m2'];
        $mm3 = $rows2['gro_title_m3'];
        $mm4 = $rows2['gro_title_m4'];
        $mm5 = $rows2['gro_title_m5'];
        $mm6 = $rows2['gro_title_m6'];
        $mm7 = $rows2['gro_title_m7'];
        $mm8 = $rows2['gro_title_m8'];
        $mm9 = $rows2['gro_title_m9'];
        $mm10 = $rows2['gro_title_m10'];
        $mm11 = $rows2['gro_title_m11'];
        $mm12 = $rows2['gro_title_m12'];
        $mm13 = $rows2['gro_title_m13'];
        $mm14 = $rows2['gro_title_m14'];
        $mm15 = $rows2['gro_title_m15'];

        $datachange2 = '
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">کد کالا :</label>
            <div class="col-lg-9">
                <input type="text" class="form-control" placeholder=" کد کالا"  name="mcode" >
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">نام کالا :</label>
            <div class="col-lg-9">
                <input type="text" name="m1" class="form-control" value="" placeholder="نام کالا">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm2.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m2" class="form-control" value="" placeholder="'.$mm2.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm3.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m3" class="form-control" value="" placeholder="'.$mm3.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm4.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m4" class="form-control" value="" placeholder="'.$mm4.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm5.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m5" class="form-control" value="" placeholder="'.$mm5.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm6.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m6" class="form-control" value="" placeholder="'.$mm6.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm7.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m7" class="form-control" value="" placeholder="'.$mm7.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm8.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m8" class="form-control" value="" placeholder="'.$mm8.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm9.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m9" class="form-control" value="" placeholder="'.$mm9.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm10.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m10" class="form-control" value="" placeholder="'.$mm10.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm11.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m11" class="form-control" value="" placeholder="'.$mm11.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm12.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m12" class="form-control" value="" placeholder="'.$mm12.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm13.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m13" class="form-control" value="" placeholder="'.$mm13.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm14.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m14" class="form-control" value="" placeholder="'.$mm14.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label">'.$mm15.' :</label>
            <div class="col-lg-9">
                <input type="text" name="m15" class="form-control" value="" placeholder="'.$mm15.'">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="col-lg-3 control-label text-semibold">ارسال تصویر :</label>
            <div class="col-lg-9">
                <input type="file" name="pics[]" class="file-input" data-show-caption="false" multiple="multiple" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-default">
                <span class="help-block">حجم کمتر از 2 مگابایت و فرمت قابل قبول jpg و png </span>
            </div>
        </div>';
        
    }
	echo $datachange2;
}
///////edit object
if(get_safe_post($mysqlicheck,'object3')== 'object3'){
	
	$object3 = get_safe_post($mysqlicheck,'object33');

	$sqlobject3 = "update object set object_status='2' WHERE object_id='$object3'";
	if($mysqlicheck->query($sqlobject3) === TRUE) {
		echo "ok3";
	}else{
		die();
	}
	
}
if(get_safe_post($mysqlicheck,'object4')== 'object4'){
	
	$object4 = get_safe_post($mysqlicheck,'object44');

	$sqlobject4 = "update object set object_status='1' WHERE object_id='$object4'";
	if($mysqlicheck->query($sqlobject4) === TRUE) {
		echo "ok4";
	}else{
		die();
	}
	
}


?>