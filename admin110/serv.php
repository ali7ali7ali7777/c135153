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


//re_object
if(get_safe_post($mysqlicheck,'che_st') == 'yy'){
	
	$co_id = get_safe_post($mysqlicheck,'co_id');
	$co_st = get_safe_post($mysqlicheck,'co_st');

	$sql_re = "UPDATE `comment` SET `comment_status`='$co_st' WHERE `comment_id`='$co_id'";
	if($mysqlicheck->query($sql_re) === TRUE) {
		echo "yes";
	}else{
		die();
	}
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
//// object 1
if(get_safe_post($mysqlicheck,'sendDATA')== 'sendDATA'){
	
	$IsendDATA = get_safe_post($mysqlicheck,'IsendDATA');

    $table = mysqli_query($mysqlicheck,"SELECT * FROM object where object_id='$IsendDATA'");
    $rows=mysqli_fetch_assoc($table);
    $arr = array('code' => $rows['object_code'], 'name' => $rows['object_name'], 'm1' => $rows['object_m1'], 'm2' => $rows['object_m2']
                 , 'm3' => $rows['object_m3'], 'm4' => $rows['object_m4'], 'm5' => $rows['object_m5']
                , 'm6' => $rows['object_m6'], 'm7' => $rows['object_m7'], 'm8' => $rows['object_m8'], 'm9' => $rows['object_m9']);

    echo json_encode($arr);
	
}


?>