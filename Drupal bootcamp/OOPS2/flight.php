<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$flightname=$_POST['flightname'];
$fromcity=$_POST['fromcity'];
$tocity=$_POST['tocity'];
$remseats=$_POST['seats'];
echo "Your requirements:" ;
echo $flightname. "<br>";
echo $fromcity."<br>";
echo $tocity . "<br>"; 
echo $remseats. "<br>";
$servername="localhost";
$username="root";
$password="Shachi@123";
$dbname="flights";	
$remseats;
function checkAvailability()
{
	global $servername,$username,$password,$dbname;	
	global $flightname,$fromcity,$tocity,$seats,$remseats;
	try 
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$sth = $conn->prepare("SELECT * FROM traveller WHERE flightname = '{$flightname}' AND fromcity='{$fromcity}' AND tocity='{$tocity}'AND seats >= '{$remseats}' ");
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$result = $sth->fetchAll();
		
		if(empty($result))
		{
			echo "Seats not available";
			die();
		}
		
		echo "Our availability:"."<br>";
		echo "<table border='1'>";
		foreach($result as $key=>$row) {
			echo "<tr>";
			foreach($row as $key2=>$row2){
				echo "<td>" . $row2 . "</td>";
				
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "Seats available"."<br>";
	}
	catch(PDOException $e)
	{
		 $e->getMessage();
	}
}
function bookFlights($rem){
	global $servername,$username,$password,$dbname;
	global $flightname,$fromcity,$tocity,$seats;
	
	try 
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$sql = $conn->prepare("Select seats from traveller WHERE flightname = '{$flightname}' AND fromcity='{$fromcity}' AND tocity='{$tocity}'");
		$user = $sql->execute();
		$seats = $sql->fetch();
		$temp = $seats['seats']-$rem;
		$sth = $conn->prepare("UPDATE traveller SET seats = '{$temp}' WHERE flightname = '{$flightname}' AND fromcity='{$fromcity}' AND tocity='{$tocity}'");
		$sth->execute();
		
		echo "Booking Done! Happy Journey!";
		$conn = null;
	}
	catch(PDOException $e)
	{
		 $e->getMessage();
	}
}
if (isset($_POST['checkFlightAvailability'])) {
	checkAvailability();
}
if (isset($_POST['bookFlights'])) {
	$remseats= $_POST['seats'];
	bookFlights($remseats);
}
?>
