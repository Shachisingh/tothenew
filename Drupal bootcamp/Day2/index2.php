<?php 
	
	$numbers = array(1,2,3,4,5,6,7);
	echo "<h1>Print 1 2 3 4 using break and foreach in array( 1, 2, 3, 4, 5, 6, 7 )</h1>";
	foreach($numbers as $value){
		if($value > 4){
			break;	
		}
		echo $value." ";
	}
?>
 

