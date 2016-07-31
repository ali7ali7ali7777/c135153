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