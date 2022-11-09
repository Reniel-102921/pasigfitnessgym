 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </head>
 </html>

 <?php
    include ('db.php');

     $sql = "TRUNCATE TABLE client_backup";
     $result = mysqli_query($con,$sql);
     if ($result==TRUE) {
        echo '<script> swal("Successfully Deleted", " ", "success").then(function()
       {
         window.location = "retrieved.php";
         });</script>';
     }else{

     }

 ?>
