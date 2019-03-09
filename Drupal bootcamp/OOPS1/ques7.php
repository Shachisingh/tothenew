<?php 
echo '<h1>Abstract Class:</h1>';
abstract class People { 
    function __construct() { 
        echo "This is an Abstract Class"; 
    } 
  
    abstract function newfun(); 
} 
class Derived extends People{ 
    function __construct() { 
        echo "Derived class constructor".'<br>'; 
    } 
    function newfun() { 
        echo "Derived function"; 
    } 
} 
$b1 = new Derived; 
$b1->newfun(); 
?> 
