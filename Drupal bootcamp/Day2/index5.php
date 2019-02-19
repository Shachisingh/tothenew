<?php 
	
	$numbers = array(1,2,3,4,5,6,7,8,9,10);
	echo "<h1>Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.</h1>";
	foreach($numbers as $value){
		if($value == sizeof($numbers)){
			echo $value;
			break;
		}
		echo $value."-";
	}
?>
 

