<?php

  date_default_timezone_set('Asia/Manila');

  if(isset($_FILES) && is_array($_FILES) && count($_FILES)){

      $date = date('Y-m-d His');
      $temp = explode(".", $_FILES['myfile']['name']);
      $newfilename = $date."-".$temp[0].".png";
      move_uploaded_file($_FILES['myfile']['tmp_name'], "Payment-Image/".$newfilename);

  }else {
    {
      echo "default.png";
    }
  }

 ?>
