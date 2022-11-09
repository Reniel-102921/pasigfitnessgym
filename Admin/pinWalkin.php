<?php
include('db.php');

if (isset($_POST['pin'])) {
  //declare vaiable
  $pin = $_POST['pin'];
  $pin_err = "";

  //if there is no input
  if (empty($pin)) {
    $pin_err = "Invalid Pin";
  } else {
    $sql = "SELECT * FROM employee_pin WHERE employee_pin='$pin'";
    $result = mysqli_query($con, $sql);

    //validate the pin if correct
    if (mysqli_num_rows($result) === 1) {
      $row = mysqli_fetch_assoc($result);

      if ($pin === $row['employee_pin']) {
        header("Location:walkin.php");
      }
    } else {
      $pin_err = "Invalid Pin";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sessionTimeout_dashboard.js"></script>

  <title>Login</title>

  <meta charset="utf-8">
  <!--BOOTSTRP-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Martel+Sans:wght@300&family=Noto+Sans+JP:wght@700&family=Pragati+Narrow&display=swap" rel="stylesheet">

</head>

<style media="screen">
  body {
    background-image: url("image/bg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
  }

  #containerSize {
    padding-top: 20vh;
  }

  .loginContainer {
    width: 460px;
    height: 55vh;
    border-radius: 5px;
    padding-top: 10px;
    border: 1px groove gray;
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 8px 50px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.60);
  }

  .loginContainer .close {
    margin-left: 90%;
  }

  .container-header {
    text-align: center;
    font-family: 'Playfair Display SC', serif;
  }

  .container-header h1 {
    font-size: 25px;
  }

  .container-header img {
    width: 90px;
    margin-bottom: 7px;
  }

  .form-group {
    border: 2px groove gray;
    border-radius: 5px;
    padding: 5px;
    padding-left: 10px;
    background-color: #f0f0f0;
    width: 65%;
    margin: auto;
    margin-top: 5px;
  }

  .form-group i {
    margin-top: 5px;
    margin-left: 10px;
    font-size: 20px;
    position: absolute;
  }

  .form-group input {
    border: none;
    background: #f0f0f0;
    border-bottom: 1px solid gray;
    margin-left: 40px;
    width: 80%;
  }

  .container-content {
    padding: 20px;
  }

  .submitButton {
    width: 35%;
    margin-top: 7px;
    font-family: 'Noto Sans JP', sans-serif;
    margin-left: 120px;
  }

  @media screen and (max-width:992px) {
    .loginContainer {
      width: 400px;
      height: 57vh;
      color: green;
    }

    .form-group {
      width: 85%;
      margin: auto;
      margin-top: 5px;
    }

    .submitButton {
      width: 35%;
      margin-top: 10px;
      font-family: 'Noto Sans JP', sans-serif;
      margin-left: 100px;
    }
  }

  @media screen and (max-width:768px) {
    .loginContainer {
      width: 400px;
      height: 57vh;
      color: red;
    }
  }
</style>


<body>

  <div class="container-sm" id="containerSize">
    <div class="container loginContainer">
      <a href="walkin.php"><button class="btn btn-secodary btn-lg close" name="button">&times;</button></a>
      <div class="container-header">
        <img src="image/logo.png" class="img-fluid">
      </div>
      <div class="container-content">
        <?php
        if (!empty($pin_err)) {
          echo '<div class="alert alert-danger">' . $pin_err . '</div>';
        }
        ?>
        <form action="pinWalkin.php" method="post">
          <div class="form-group mb-3">
            <i class="fa-solid fa-lock"></i>
            <input type="password" id="pin" name="pin" style="border-radius:5px;" placeholder="Enter Pin" class="form-control" autocomplete="off">
          </div>
          <input type="submit" class="btn btn-primary submitButton" value="Login">
        </form>

      </div>
    </div>
  </div>
</body>

</html>