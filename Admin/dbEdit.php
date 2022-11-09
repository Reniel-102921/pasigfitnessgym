<?php
$con = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

  if(isset($_POST['datePaid'])){
    $datePaid = $_POST['datePaid'];
    $id = $_POST['id'];

    //query to update data

    $sql = mysqli_query($con, "UPDATE client SET datePaid='$datePaid' WHERE ID='$id'");
    if($sql){
      echo 'data update';
    }
  }
