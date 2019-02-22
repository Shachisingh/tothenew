<?php

$servername = "localhost";
$username = "root";
$password = "Shachi@123";

$email = $_POST['email'];
echo "you entered ".$email.'<br>';
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    echo "Connected successfully"; 
    $sth = $conn->prepare("SELECT * FROM emp WHERE email LIKE '%{$email}%'");
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sth->fetchAll();
    //print_r($result);
    echo "<h1>SEARCH BY EMAIL</h1>";
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
