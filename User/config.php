<?php
class PFG
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "pasigfitnessgym";
  public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($dateRegistered, $firstname, $lastname,$age, $contact, $address, $final, $qrimage)
 	{
 			$sql = "INSERT INTO client(dateRegistered, firstname,lastname,age,contact,address, qrContent, qrImage)
			 VALUES('$dateRegistered', '$firstname', '$lastname', '$contact', '$age', '$address', '$final', '$qrimage')";
 			$query = $this->conn->query($sql);
 			return $query;


 	}
 	// public function displayImg()
 	// {
 	// 	$sql = "SELECT qrImg from client where qrImg='$qrimage'";
  //
 	// }
}
$pfg = new PFG();
