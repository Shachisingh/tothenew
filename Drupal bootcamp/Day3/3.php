
 <?php
 echo "<h1>What will be the output of this question ?</h1>";
 $a = '1';
 $b = &$a;
 $b = "2$b";
 echo $a.", ".$b;
 ?>
