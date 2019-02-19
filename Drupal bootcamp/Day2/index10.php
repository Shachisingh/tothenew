
<?php 
	echo "<h1>Using loop find sum of numbers from 1 to 15.</h1>";
	$num = 1;
	$sum = 0;
	while($num<16):
		$sum = $sum + $num;
		$num++;
	endwhile;
	echo $sum;
?>
 

