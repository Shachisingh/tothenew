<?php

$servername = "localhost";
$username = "root";
$password = "Shachi@123";

$name = $_POST['first_name'];
echo "you entered ".$name.'<br>';
try 
{
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    echo "Connected successfully"; 
    $sth = $conn->prepare("SELECT * FROM emp WHERE first_name LIKE '%{$name}%'");
    $sth->execute();
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sth->fetchAll();
    //print_r($result);
    echo "<h1>SEARCH BY NAME</h1>";
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
