<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "pasigfitnessgym";

$conn = mysqli_connect($servername, $username, $password, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_query = "INSERT INTO outofstock SELECT * FROM products WHERE prod_avail <= '0' ";
$sql_delete = "DELETE FROM products WHERE prod_avail <= '0' ";
if ($conn->query($sql_query) === true){
}
else{

}
if ($conn->query($sql_delete) === true){
}
else{

}
