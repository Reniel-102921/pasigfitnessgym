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
                <h1>Update Admin Pin</h1>
            </div>
            <div class="container-content ">
                <form action="updateAdminPin.php" method="post">
                    <div class="form-group">
                        <i class="fa-sharp fa-solid fa-user-lock"></i>
                        <input type="password" id="currentPin" name="currentPin" placeholder="Current Pin">
                    </div>
                    <div class="form-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="newPin" name="newPin" placeholder="Enter New Pin">
                    </div>
                    <button type="submit" onclick="update()" name="update" class="btn btn-primary submitButton">Update</button>
                </form>

                <?php
                if (isset($_POST['update'])) {

                    include 'db.php';

                    $updatepin = $_POST['currentPin'];
                    $newPin = $_POST['newPin'];

                    $sql = "SELECT * FROM admin_pin WHERE admin_pin ='$updatepin'";
                    $result = $con->query($sql);
                    $row = mysqli_fetch_assoc($result);

                    $currentPin = $row['admin_pin'];

                    if ($updatepin != $currentPin) {

                        echo "
                            <div class='order-message-container'>
                            <div class='message-container'>
                            <h3>Your Inputted Quantity is above on our Stocks!</h3>
                            <a href='trysample.php' class='btn btn-secondary btn-lg active' name='back'> BACK</a>
                            </div>
                            </div>
                            ";
                    } else {
                        $db = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

                        $sqlPin = mysqli_query($con, "UPDATE employee_pin SET employee_pin = '$newPin' WHERE employee_pin = '$updatepin'");

                        echo "
                          <div class='order-message-container'>
                          <div class='message-container'>
                          <script>alert('Successfully Updated')
                          window.location ='menu.php';
                          </script></div>
                          </div>
                          ";
                    }
                }

                ?>
            </div>

        </div>
    </div>

</body>

</html>