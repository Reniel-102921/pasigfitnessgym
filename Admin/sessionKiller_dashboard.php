<?php
  session_start();
  session_destroy();

  header("Location: logoutDashboard.php");
  exit();
 ?>
