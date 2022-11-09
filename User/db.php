<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "pasigfitnessgym";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
