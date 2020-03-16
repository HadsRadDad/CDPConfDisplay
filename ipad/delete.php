<?php
$host = "localhost";
$user = "root";
$pass = "CDPdisplay";
$db = "Contact";


$con = mysqli_connect($host,$user,$pass,$db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// sql to delete a record
$sql = "DELETE FROM contacts";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();

echo "<meta http-equiv=\"refresh\" content=\"1;url=export2.php\"/>"
?>