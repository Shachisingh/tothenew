<?php

if(!isset($_POST['submit']))
{
    echo "please dont try it !! We are very dangerous people , dont mess with us lol";
    die();
}

if(!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['phone']))
{
    echo "You Cant Do It";
    die();
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(strlen($phone) != 10)
{
    echo "Enter 10 digits in phone number";
    die();
}


if (preg_match("/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/", $email))
{
	echo "Email Validated";
}
else
{
    echo "Email Invalid";
    die();
}

$servername = "localhost";
$username = "root";
$password = "Jitender@123";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $sql = "INSERT INTO emp (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', $phone)";
    $conn->exec($sql);
    echo "New record created successfully";
    $conn = null;
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

?>