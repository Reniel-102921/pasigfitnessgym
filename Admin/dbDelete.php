<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
</html>

<?php
  include('db.php');
  if (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM client WHERE ID = '$id'";
    $result=mysqli_query($con,$sql);
    if ($result==TRUE) {
       echo '<script> swal("Successfully Deleted", " ", "success").then(function()
      {
        window.location = "deleteCustomer.php";
        });</script>';
    }else{

    }
    }
?>
