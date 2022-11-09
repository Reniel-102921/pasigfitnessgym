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

    $sql = "DELETE FROM client_backup WHERE ID = '$id'";
    $result=mysqli_query($con,$sql);
    if ($result==TRUE) {
       echo '<script> swal("Successfully Retrieved", " ", "success").then(function()
      {
        window.location = "retrieved.php";
        });</script>';
    }else{

    }
    }
?>
