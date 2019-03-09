<?php
echo '<h1>MultiLevel Inheritance Example</h1>';
class GrandFather
{
	public function gfatherAge()
	{
		return  ' age is 90';
	}
}
class Father extends GrandFather
{
		
	public function fatherAge()
	{
		return  ' age is 60';
	}
}
class Son extends Father
{
	public function sonAge()
	{
		return  'age is 20';
	}
     public function myRoots()
     {
	 echo "Grandfather's ".parent::gfatherAge().'<br>';
	 echo "Father's ".parent::fatherAge().'<br>';
       echo "My ".$this->sonAge();
     }
	
}
$obj = new Son();
$obj->myRoots();
?>
