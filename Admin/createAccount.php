<?php
// Include config file
require_once "db-login.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  // Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
    $username_err = "Username can only contain letters, numbers, and underscores.";
  } else {
    // Prepare a select statement
    $sql = "SELECT id FROM employee WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = trim($_POST["username"]);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken.";
        } else {
          $username = trim($_POST["username"]);
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Validate password
  if (empty(trim($_POST["pin"]))) {
    $password_err = "Please enter a password.";
  } elseif (strlen(trim($_POST["pin"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
  } else {
    $password = trim($_POST["pin"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["check_pin"]))) {
    $confirm_password_err = "Please confirm password.";
  } else {
    $confirm_password = trim($_POST["check_pin"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "Password did not match.";
    }
  }

  // Check input errors before inserting in database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

    // Prepare an insert statement
    $sql = "INSERT INTO employee (username, password) VALUES (?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: loginDashboard.php");
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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Create Employee Account</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=PT+Serif:wght@700&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--BOOTSTRAP-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<!-- <script src="sessionTimeout_dashboard.js"></script> -->


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
    height: 90vh;
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
  }

  .container-header h1 {
    text-align: center;
    font-size: 30px;
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
    width: 90%;
    margin: auto;
    margin-top: 10px;
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
    width: 70%;
  }

  .container-content {
    padding: 20px;
  }

  .submitButton {
    width: 90%;
    margin-top: 20px;
    font-family: 'Noto Sans JP', sans-serif;
    margin-left: 20px;

  }

  @media screen and (max-width:992px) {
    .loginContainer {
      width: 400px;
      height: 90vh;
      color: green;
    }

    .form-group {
      width: 320px;
      margin: auto;
      margin-top: 10px;
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
      height: 90vh;
      color: red;
    }
  }
</style>

<body>

  <div class="container-sm" id="containerSize">
    <div class="container loginContainer">
      <a href="menu.php"><button class="btn btn-secodary btn-lg close" name="button">&times;</button></a>
      <div class="container-header">
        <img src="image/logo.png" class="img-fluid">
        <h1>Create Employee<br>Account</h1>
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
            <input type="text" style="border-radius:5px;" name="username" id="username" placeholder="Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
          </div>
          <div class="form-group mb-3">
            <i class="fa-solid fa-lock"></i>
            <input type="password" style="border-radius:5px;" name="pin" id="pin" placeholder="Enter Password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
          </div>
          <div class="form-group mb-3">
            <i class="fa-solid fa-lock"></i>
            <input type="password" style="border-radius:5px;" name="check_pin" id="check_pin" placeholder="Confirm Password" class="form-control  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
          </div>
          <input type="submit" class="btn btn-primary submitButton" value="Submit">
        </form>
      </div>
      <div style="text-align:right">
        <a href="updatePin.php">Change Pin</a>
      </div>
    </div>
  </div>

</body>

</html>