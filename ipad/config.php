<?php

$host = "localhost";    
$user = "root";        
$password = "CDPdisplay";
$dbname = "Contact";  

$con = new mysqli($host, $user, $password) or die("Unable to connect");

// selecting database
$db = mysqli_select_db($con, $dbname) or die("Database not found");


?>
