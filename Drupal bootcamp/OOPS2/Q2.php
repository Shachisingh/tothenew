<!Doctype html>

<?php
$name="name";
$value="Shachi";
setcookie($name, $value, time()+30*24*60*60);
if(!isset($_COOKIE[$name])) {
    echo "Cookie named '" . name . "' is not set!";
} else {
    echo "Cookie '" . $name . "' is set!<br>";
    echo "Value is : " . $_COOKIE[$name];
}
?>
<html>
    <head>
   
   
    </head>
    <body> 
        
         
</body>
</html>
