<?php
class Vehicle {
private $color;
public function setColor($color) {
$this->color = $color;
}
public function getColor() {
return $this->color;
}
}
class Car extends Vehicle {
private $steering;
public function setwheel($steerings) {
$this->steering = $steerings;
}
public function getwheel() {
return $this->steering;
 }
}
$obj = new Car();
$obj->setColor("Black");
$obj->setwheel("Leather");
$color = $obj->getColor();
$steeringwheel = $obj->getwheel();
printf("Color = %s and SteeringWheel = %s", $color, $steeringwheel);
?>
