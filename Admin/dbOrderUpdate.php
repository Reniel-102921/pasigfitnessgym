<?php
$con = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

  if(isset($_POST['order_status'])){
    $datePickup = $_POST['datePickup'];
    $order_status = $_POST['order_status'];
    $id = $_POST['id'];

    //query to update data

    $sql = mysqli_query($con, "UPDATE orders SET datePickup='$datePickup', order_status='$order_status' WHERE order_id='$id'");
    if($sql){
      echo 'data updated';
    }
  }
 ?>
