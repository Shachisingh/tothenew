<?php

$servername = "localhost";
$username = "root";
$password = "Jitender@123";

$phone = $_POST['phone'];
echo "you entered ".$phone.'<br>';
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    echo "Connected successfully"; 
    $sth = $conn->prepare("SELECT * FROM emp WHERE phone LIKE '%{$phone}%'");
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sth->fetchAll();
    //print_r($result);
    echo "<h1>SEARCH BY PHONE</h1>";
    echo "<table border='1'>";
    foreach($result as $key=>$row) {
        echo "<tr>";
        foreach($row as $key2=>$row2){
            echo "<td>" . $row2 . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>