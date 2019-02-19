<?php 
	
	$numbers = array(1,2,3,4,5,6,7);
	echo "<h1>Using switch case, check if value ($value = 4) is greater than 5 or not. </h1>";
		$temp = 4;
		switch($temp){
			case ($temp>5): 
				echo "Greater than 5";
				break;
			case ($temp == 5):
				echo "Equal to 5";
				break;
			case ($temp<5):	
				echo "Less than 5";
				break;
		}
		
?>
 

