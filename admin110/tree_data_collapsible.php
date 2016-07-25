<?php
include("inc_db.php");
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json; charset=utf-8');
if($_SESSION['login']!="modir" && $_SESSION['login']!="user" )
{
	$url = 'login.php';
	header( "Location: $url" );
	die();
}

/*$table12 = mysqli_query($mysqlicheck,"SELECT * FROM gro");
$rows12 = array();
while($r = mysqli_fetch_assoc($table12)) {
    $rows12[] = $r;
}*/
//print json_encode($rows12);
	
//////////

//$name= array();
/*
$name .='{"name": "انبار","children": [';
$table22 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_parent_id='0'");
$numResults2 = $table22->num_rows;

$counter2 = 0;

while($rows2=mysqli_fetch_assoc($table22))
{
	
	$table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_parent_id=".$rows2['gro_id']." ");
	$numResults3 = $table3->num_rows;
	$counter3 = 0;
	
	if ($numResults3 == 0) {
		$name .='{"name": "'.$rows2['gro_name'].'}'; // age bache nadashte bashe
	}else{
		$name .='{"name": "'.$rows2['gro_name'].'","children": ['; // age bache dashte bashe
	
		while($rows3=mysqli_fetch_assoc($table3))
		{
			
			if(++$counter3 == $numResults3) 
				$name .='{"name": "'.$rows3['gro_name'].'"}]}';// last row
			 else
				$name .='{"name": "'.$rows3['gro_name'].'"},'; // not last row
			
		}
	}
		if(++$counter2 == $numResults2)
			$name .= ']}'; // last row
		else
			$name .= ',';// not last row
		
	
}
$name .='';
echo $name;
//print( json_encode($name, JSON_UNESCAPED_UNICODE ));
/*echo '

{
 "name": "شسشس",
 "children": [
  {
   "name": "یسیس",
   "children": [
    {
     "name": "سیسی",
     "children": [
      {"name": "سیسی"}
     ]
    },
    {"name": "سیسیس"}
   ]
  }
 ]
}
';*/
$name .='{"name": "انبار","children": [';
$table1 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_parent_id=0");
$numResults1 = $table1->num_rows;
$counter1 = 0;
while($rows1=mysqli_fetch_assoc($table1))
{
    $table2 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_parent_id=".$rows1['gro_id']."");
    $numResults2 = $table2->num_rows;
    $counter2 = 0;
   if ($numResults1 == 0) {
        $name .='{"name": "'.$rows1['gro_name'].'"}'; // age bache nadashte bashe
    }else{
        $name .='{"name": "'.$rows1['gro_name'].'","children": ['; // age bache dashte bashe
        while($rows2=mysqli_fetch_assoc($table2))
        {
            $table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_parent_id=".$rows2['gro_id']."");
            $numResults3 = $table3->num_rows;
            $counter3 = 0;
            if ($numResults3 == 0) {
                $name .='{"name": "'.$rows2['gro_name'].'"}'; // age bache nadashte bashe
            }else{
                $name .='{"name": "'.$rows2['gro_name'].'","children": ['; // age bache dashte bashe
                while($rows3=mysqli_fetch_assoc($table3))
                {
                    $table4 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_parent_id=".$rows3['gro_id']."");
                    $numResults4 = $table4->num_rows;
                    $counter4 = 0;
                    if ($numResults4 == 0) {
                        $name .='{"name": "'.$rows3['gro_name'].'"}'; // age bache nadashte bashe
                    }else{
                        $name .='{"name": "'.$rows3['gro_name'].'","children": ['; // age bache dashte bashe
                        while($rows4=mysqli_fetch_assoc($table4))
                        {
                            $table5 = mysqli_query($mysqlicheck,"SELECT * FROM gro where gro_parent_id=".$rows4['gro_id']."");
                            $numResults5 = $table5->num_rows;
                            $counter5 = 0;
                            if ($numResults5 == 0) {
                                $name .='{"name": "'.$rows4['gro_name'].'"}'; // age bache nadashte bashe
                            }else{
                                $name .='{"name": "'.$rows4['gro_name'].'","children": ['; // age bache dashte bashe
                                while($rows5=mysqli_fetch_assoc($table5))
                                {
                                    if(++$counter5 == $numResults5)
                                        $name .='{"name": "'.$rows5['gro_name'].'"}]}';// last row
                                    else
                                        $name .='{"name": "'.$rows5['gro_name'].'"},'; // not last row
                                }
                            }
                            if(++$counter4 == $numResults4)
                                $name .= ']}'; // last row
                            else
                                $name .= ',';// not last row 
                        }
                    }
                    if(++$counter3 == $numResults3)
                        $name .= ']}'; // last row
                    else
                        $name .= ',';// not last row 
                }
            }
            if(++$counter2 == $numResults2)
                $name .= ']}'; // last row
            else
                $name .= ',';// not last row 
        }
    }
    if(++$counter1 == $numResults1)
        $name .= ']}'; // last row
    else
        $name .= ',';// not last row    
}

/*
$name .='{"name": "انبار","children": [';
$table22 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_parent_id='0'");
$numResults2 = $table22->num_rows;

$counter2 = 0;

while($rows2=mysqli_fetch_assoc($table22))
{
	
	$table3 = mysqli_query($mysqlicheck,"SELECT * FROM gro WHERE gro_parent_id=".$rows2['gro_id']." ");
	$numResults3 = $table3->num_rows;
	$counter3 = 0;
	
	if ($numResults3 == 0) {
		$name .='{"name": "'.$rows2['gro_name'].'}'; // age bache nadashte bashe
	}else{
		$name .='{"name": "'.$rows2['gro_name'].'","children": ['; // age bache dashte bashe
	
		while($rows3=mysqli_fetch_assoc($table3))
		{
			
			if(++$counter3 == $numResults3) 
				$name .='{"name": "'.$rows3['gro_name'].'"}]}';// last row
			 else
				$name .='{"name": "'.$rows3['gro_name'].'"},'; // not last row
			
		}
	}
		if(++$counter2 == $numResults2)
			$name .= ']}'; // last row
		else
			$name .= ',';// not last row
		
	
}
*/
$name .='';
echo $name;

?>