<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "itmentorapps";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";

// Close connection (usually at the end of your script)
mysqli_close($conn);

?>
