<?php 
	echo "<h1>Create a function to calculate factorial value of a number. Use this function to get factorial of 5.</h1>";
	
	function fact($val){
		if ($val == 0 || $val == 1):
			return 1;
		endif;
		return $val * fact($val-1);
	}	
	$num = 5;
	$ans = fact($num);
	echo $ans;
?>
 

