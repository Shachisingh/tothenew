<?php 
	
	$numbers = array(1,2,3,4,5,6,7);
	echo "<h1> Print 1 & 6 using foreach in array 1 to 6</h1>";
	foreach($numbers as $value){
		if($value == 1 || $value == 6){
			echo $value." ";
		}
	}
?>
 

