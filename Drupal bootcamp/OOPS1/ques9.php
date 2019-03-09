<?php
echo '<h1>Method Chaining Example</h1>';
class user{
 private $name="";
 private $age="";
 public function setName($name=""){
  $this->name=$name; 
   return $this;
   }
   public function setAge($age="20"){
    $this->age=$age;
    return $this;
  }
  public function getInfo(){
    echo "My name is ".$this->name." and age is ".$this->age." years.";
  }
} 
$user = new user();
$user->setName("Shachi")->setAge("21")->getInfo(); 
?>
