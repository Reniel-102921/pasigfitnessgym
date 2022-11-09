<?php
// Initialize the session
session_start();


// Check if the user is already logged in, if yes then redirect him to Client page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: logoutDashboard.php");
  exit;
}

// Include config file
require_once "db-login.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = ".";
  } else {
    $username = trim($_POST["username"]);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = ".";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate credentials
  if (empty($username_err) && empty($password_err)) {
    // Prepare a select statement
    $sql = "SELECT id, username, password FROM employee WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = $username;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, $hashed_password)) {
              // Password is correct, so start a new session
              session_start();

              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;

              // Redirect user to Client page
              header("location: enrolledDashboard.php");
            } else {
              // Password is not valid, display a generic error message
              $login_err = "Invalid username or password.";
            }
          }
        } else {
          // Username doesn't exist, display a generic error message
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

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

  <script src="sessionTimeout_dashboard.js"></script>

</head>

<style media="screen">
  body {
    background-image: url("image/bg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
  }

  #containerSize {
    padding-top: 5vh;
  }

  .loginContainer {
    width: 460px;
    height: 85vh;
    border-radius: 5px;
    border: 1px groove gray;
    padding-top: 10px;
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

  .container-header img {
    width: 100px;
    margin-bottom: 20px;
  }

  .form-group {
    border: 2px groove gray;
    border-radius: 5px;
    padding: 5px;
    padding-left: 10px;
    background-color: #f0f0f0;
    width: 95%;
    margin: auto;
    margin-top: 20px;
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
    width: 95%;
    margin-top: 20px;
    font-family: 'Noto Sans JP', sans-serif;
    margin-left: 10px;
  }

  @media screen and (max-width:992px) {
    .loginContainer {
      width: 400px;
      height: 80vh;
      color: green;
    }

    .form-group {
      width: 320px;
      margin: auto;
      margin-top: 20px;
    }

    .submitButton {
      width: 320px;
      margin-top: 20px;
      font-family: 'Noto Sans JP', sans-serif;
    }
  }

  @media screen and (max-width:768px) {
    .loginContainer {
      width: 400px;
      height: 80vh;
      color: red;
    }
  }
</style>


<body>

  <div class="container-sm" id="containerSize">
    <div class="container loginContainer">
      <a href="../user/index.php"><button class="btn btn-secodary btn-lg close" name="button">&times;</button></a>
      <div class="container-header">
        <img src="image/logo.png" class="img-fluid">
        <h1>Login Authorize Personel</h1>
      </div>
      <div class="container-content ">
        <?php
        if (!empty($login_err)) {
          echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group mb-3">
            <i class="fa-solid fa-user"></i>
            <input type="text" style="border-radius:5px;" name="username" placeholder="Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
          </div>
          <div class="form-group mb-3">
            <i class="fa-solid fa-lock"></i>
            <input type="password" style="border-radius:5px;" name="password" id="password" placeholder="Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
          </div>
          <input type="submit" class="btn btn-primary submitButton" value="Login">
        </form>
      </div>
    </div>
  </div>

</body>

</html>