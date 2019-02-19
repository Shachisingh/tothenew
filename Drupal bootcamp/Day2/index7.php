<?php 
	
	$numbers = array(1,2,3,4,5,6,7);
	echo "<h1>Print 1,2,3,6,7 from array( 1, 2, 3, 4, 5, 6, 7 ).</h1>";
	foreach($numbers as $value):
		if($value == 5 || $value == 4):
			continue;
		endif;
		echo $value." ";
	endforeach;
?>
 

