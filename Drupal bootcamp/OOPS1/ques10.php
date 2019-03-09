<?php
echo '<h1>This keyword example</h1>';
class user{
Public $name;
Public $roll;
function get($a, $b){
$this->name= $a;
$this->roll= $b;
}
function show(){
echo $this->name."<br>";
echo $this->roll;
}
} 
$obj= new user();
$obj->get("Shachi",401);
$obj->show();
?>
