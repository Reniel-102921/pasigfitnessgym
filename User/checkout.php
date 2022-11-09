<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="styleProduct.css">
  <title>CHECKOUT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bot.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=PT+Serif:wght@700&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/product.css">
</head>


<style>
  body {
    background-color: white;
  }

  .product {
    background-image: url("image/bgaddress.png");
    background-size: cover;
    width: 100%;
    height: 300px;
    margin-top: none;
  }

  .product h1 {
    font-size: 50px;
    font-weight: 700;
    color: #ff9f0f;
    padding-left: 230px;
    padding-top: 100px;
  }

  /*FOOTER*/
  .footer {
    width: 100%;
    max-width: 100%;
    height: auto;
    background-color: #2e2e2e;
    text-align: center;
    justify-content: center;
    padding: 30px;
    display: inline-block;
    align-items: center;
  }

  .copyright {
    color: white;
    font-size: 15px;
  }

  .footer-content {
    justify-content: space-between;
    color: #f6f6f6;
  }

  .footer-content a {
    text-decoration: none !important;
    color: #f6f6f6;
    font-size: 15px;
    font-weight: 600;
    margin: 10px;
    display: relative;
  }

  .footer-content ul {
    list-style: none;
    width: 100%;
    max-width: 100%;
    height: auto;
  }

  .footer-content li {
    display: inline;
    line-height: 70px;
    list-style: none;
  }

  .footer-line {
    height: 1px;
    max-height: 100%;
    width: 50%;
    max-width: 100%;
    background-color: white;
    display: block;
    margin: auto;
  }

  .footer-desc {
    color: #f6f6f6;
  }

  .footer-social-media {
    height: auto;
  }

  .footer-social-media img {
    margin-top: 40px;
    height: 40px;
  }

  .hidden {
    display: block;
  }
</style>

<body>


  <!--NAVIGATOR-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top nav-bg">
    <div class="container-fluid">
      <div class="navbar-brand">
        <img src="image/logos.png">
        <p>Pasig Fitness Gym</p>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center navbar-dark bg-dark" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-center mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link ms-5" aria-current="page" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-5" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link ms-5" aria-current="page" href="product.php">PRODUCT</a>
          </li>
          <li class="nav-item" style="margin-right:100px">
            <a class="nav-link ms-5" aria-current="page" href="contact.php">CONTACT</a>
          </li>
        </ul>
        <div class="nav-icon d-flex">
          <button type=" button" class="btn btn-pri register_button ms-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">REGISTER</button>
          <a href="http://localhost/capstone/admin/enrolledDashboard.php"><i class="admin fa-solid fa-circle-user ms-3"></i></a>
        </div>
      </div>
    </div>
  </nav>


  <!-- <div class="product">
    <h1>PRODUCT</h1>
  </div> -->



  <!--registration and qr-->
  <?php
  include "pfgQr/qrlib.php";
  include "config.php";
  if (isset($_POST['create'])) {
    $dateRegistered = $_POST['dateRegistered'];
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $age =  $_POST['age'];
    $contact =  $_POST['contact'];
    $address =  $_POST['address'];
    $qrImgName = "pfg" . rand();

    $final = "Date: " . $dateRegistered . "\n" . "Name: " . $firstname . " " . $lastname .  "\n" . "Age: " . $contact . "\n" . "Contact: " . $age . "\n" . "Address: " . $address;
    $qrs = QRcode::png($final, "userQr/$qrImgName.png", "H", "3", "3");
    $qrimage = $qrImgName . ".png";
    $insQr = $pfg->insertQr($dateRegistered, $firstname, $lastname, $age, $contact, $address, $final, $qrimage);
    if ($insQr == true) {
      echo "<script>alert('Thank You $firstname $lastname'); window.location='home.php?success=$qrimage';</script>";
    } else {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }

  ?>

  <?php
  if (isset($_GET['success'])) {
  ?>
    <div class="container bg-white my-5 py-5">
      <div class="container w-25">
        <img src="userQr/<?php echo $_GET['success']; ?>" alt="" class="w-100 mb-3">
        <a href="home.php" class="btn btn-primary w-100">Go Back To Generate Again</a>
      </div>
    </div>
  <?php
  } else {
  }
  ?>

  <!-- Registration Off canvas -->
  <section class="container-fluid">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">

        <h1 class="offcanvas-title">Registration</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <form method="post">
          <div class="mb-3 mt-3">
            <label for="dateRegistered"><strong>Date</strong></label>
            <input type="date" class="form-control" id="dateRegistered" name="dateRegistered" value="<?php if (isset($_POST['create'])) {
                                                                                                        echo $_POST['dateRegistered'];
                                                                                                      } ?>" class="w-100 form-control" required />
          </div>
          <div class="mb-3">
            <label for="firstname"><strong>First name</strong></label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php if (isset($_POST['create'])) {
                                                                                              echo $_POST['firstname'];
                                                                                            } ?>" placeholder="First Name" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-3">
            <label for="lastname"><strong>Last name</strong></label><br>
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php if (isset($_POST['create'])) {
                                                                                            echo $_POST['lastname'];
                                                                                          } ?>" placeholder="Last Name" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-3">
            <label for="contact"><strong>Age</strong></label><br>
            <input type="text" class="form-control" id="contact" name="contact" value="<?php if (isset($_POST['create'])) {
                                                                                          echo $_POST['contact'];
                                                                                        } ?>" placeholder="Age" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-3">
            <label for="age"><strong>Contact Number</strong></label>
            <input type="text" class="form-control" id="age" name="age" value="<?php if (isset($_POST['create'])) {
                                                                                  echo $_POST['age'];
                                                                                } ?>" placeholder="Contact Number" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-3">
            <label for="address"><strong>Address</strong></label><br>
            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" alue="<?php if (isset($_POST['create'])) {
                                                                                                                    echo $_POST['address'];
                                                                                                                  } ?>" placeholder="Address*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="col-12">
            <input id="sumbit-register" type="submit" name="create" value="Submit Registration" class="w-100 btn btn-dark text-white mt-4">
          </div>
        </form>
      </div>
  </section>

  <?php

  // ORDER BUTTON
  if (isset($_POST['orderNow'])) {

    include 'db.php';

    // $filename = $_FILES["myfile"]["name"];
    // $tempname = $_FILES["myfile"]["tmp_name"];
    // $folder = "./paymentproof/" . $filename;

    $proof = $_FILES['proof']['name'];
    $proof_tmp_name = $_FILES['proof']['tmp_name'];
    $proof_folder = '../paymentproof/' . $proof;


    $prod_name = $_POST['prod_name'];
    $inputQty = $_POST['inputQty'];
    $finalprice = $_POST['finalprice'];

    $expense = $inputQty * $finalprice;

    $name = $_POST['cust_name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $method = $_POST['method'];
    $reference = $_POST['reference'];

    $sql = "SELECT * FROM products WHERE prod_name ='$prod_name'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    $totalStock = $row['prod_avail'] - $inputQty;

    if ($inputQty > $row['prod_avail'] && $row['prod_avail'] < $inputQty) {
      echo "
        <div class='order-message-container'>
        <div class='message-container'>
          <h3>Your Inputted Quantity is above on our Stocks!</h3>
          <div class='order-detail'>
              <span>Product: " . $prod_name . "</span>
              <span>Available Stocks: " . $row['prod_avail'] . "</span>
              <span>Quantity of your Order: " . $inputQty . "</span>
          </div>
          <a href='product.php' class='btn btn-secondary btn-lg active' name='back'> BACK</a>
          </div>
        </div>
        ";
    } else {
      $db = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

      $sqlOrder = mysqli_query($conn, "INSERT INTO orders(cust_name, order_item, order_qty, cust_number, email, method, total_price, proof)
      VALUES('$name', '$prod_name', '$inputQty', '$number', '$email', '$method', '$expense', '$proof')");

      $sqlCustomer = mysqli_query($conn, "INSERT INTO customers(cust_name, email, cust_number, reference, method)
      VALUES ('$name', '$email', '$number', '$reference', '$method')");

      $sqlProduct = mysqli_query($conn, "UPDATE products SET prod_avail = '$totalStock' WHERE prod_name = '$prod_name'");

      echo "
        <div class='order-message-container'>
        <div class='message-container'>
          <h3>thank you for shopping $name!</h3>
          <div class='order-detail'>
              <span>Product: " . $prod_name . "</span>
              <span>Quantity: " . $inputQty . "</span>
              <span class='total'> total : ₱" . $expense . ".00  </span>
          </div>

              <a href='product.php' class='btn btn-secondary btn-lg active' name='done' role='button' aria-pressed='true'>DONE</a>

          </div>
        </div>
        ";
      move_uploaded_file($proof_tmp_name, $proof_folder);
    }
  }

  ?>

  <!--customer details form -->
  <section class="checkout-form">
    <form action="" method="post" name="uploadCheckout" enctype="multipart/form-data">
      <h1 class="heading">complete your order</h1>

      <div class="container">

        <section class="shopping-cart">
          <table class="table">

            <thead>
              <th>Image</th>
              <th>Name</th>
              <th>price</th>
              <th>Stock</th>
              <th>Qty</th>
              <th>Total</th>
              <th>Cancel</th>
            </thead>

            <tbody>

              <?php
              if (isset($_GET['productID'])) {
                $checkoutID = $_GET['productID'];
                $checkoutProduct = mysqli_query($conn, "SELECT * FROM products WHERE id = '$checkoutID'");
              }
              ?>

              <?php
              while ($fetch_product = mysqli_fetch_assoc($checkoutProduct)) {
              ?>
                <tr>
                  <td><img src="uploaded_product/<?php echo $fetch_product['image']; ?>" height="80" width="60" alt=""></td>
                  <td><?php echo $fetch_product['prod_name']; ?></td>
                  <td><?php echo $fetch_product['finalprice']; ?></td>
                  <td><?php echo number_format($fetch_product['prod_avail']); ?></td>
                  <!-- get the product of price and qty -->
                  <!-- <td><input type="number" id="inputQty" name="inputQty" onchange="limiter(this);" onkeyup="calculatePrice()" style="width: 80px;"></td> -->
                  <td>
                    <select id="inputQty" name="inputQty" onchange="selectNum()">
                      <option value="select" style="width: 80px;">select Quantity</option>
                      <option value="1" style="width: 80px;">1</option>
                      <option value="2" style="width: 80px;">2</option>
                    </select>
                  </td>
                  <input type="hidden" id="price" name="price" value="<?php echo $fetch_product['finalprice'] ?>" />
                  <td> <span id="expense" name="expense"> <?php echo $fetch_product['finalprice'] ?> </span></td>


                  <td><a href="checkout.php?remove=<?php echo $fetch_product['id']; ?>" onclick="return confirm('Are you sure you want to cancel buying this product?')" class="delete-btn"> <i class="fas fa-trash"></i></a>
                    <input type="hidden" id="prod_name" name="prod_name" value="<?php echo $fetch_product['prod_name']; ?>">
                    <input type="hidden" id="finalprice" name="finalprice" value="<?php echo $fetch_product['finalprice']; ?>">
                    <input type="hidden" id="prod_avail" name="prod_avail" value="<?php echo number_format($fetch_product['prod_avail']); ?>">
                </tr>
              <?php
              };
              ?>
            </tbody>
          </table>
        </section>

        <br>
        <div class="hidden">
          <h1 style="font-size:30px;">Fill up the form </h1>
          <br>
          <div class=" flex">

            <div class="inputBox">
              <span>your name</span>
              <input type="text" placeholder="enter your name" name="cust_name" required>
            </div>
            <div class="inputBox">
              <span>your number</span>
              <input type="number" placeholder="enter your number" name="number" required>
            </div>
            <div class="inputBox">
              <span>your email</span>
              <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
              <span>PAY VIA</span>
              <select name="method">
                <option value="GCASH" selected>GCASH: 09673377095</option>
                <option value="PAYMAYA">PAYMAYA: 09271415228</option>
                <option value="PAYPAL">PAYPAL: pasiggym@gmail.com</option>
              </select>
            </div>
            <div class="inputBox">
              <span>Account Name/Reference Number</span>
              <input type="account" placeholder="account used for payment" name="reference" id="fileToUpload" required>
            </div>
            <div class="inputBox">
              <span>Upload Payment Proof </span>
              <input type="file" name="proof" accept="image/png, image/jpg, image/jpeg, image/jfif" class="box" required>
            </div>

          </div>
          <input type="submit" value="order now" name="orderNow" class="option-btn">
        </div>
    </form>
  </section>

  </div>

  <!-- Enrollment -->

  <?php
  error_reporting(0);

  // If upload button is clicked ...
  if (isset($_POST['uploadEnroll'])) {

    $filename = $_FILES["myfile"]["name"];
    $tempname = $_FILES["myfile"]["tmp_name"];
    $folder = "./paymentproof/" . $filename;

    $en_firstname = $_POST['en_firstname'];
    $en_lastname = $_POST['en_lastname'];
    $en_age = $_POST['en_age'];
    $en_gender = $_POST['en_gender'];
    $en_height = $_POST['en_height'];
    $en_weight = $_POST['en_weight'];
    $bmi = $_POST['bmi'];
    $en_plan = $_POST['en_plan'];
    $en_contact = $_POST['en_contact'];
    $en_address = $_POST['en_address'];

    $db = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

    // Get all the submitted data from the form
    $sql = "INSERT INTO enrolled (en_firstname, en_lastname, en_age, en_gender, en_height, en_weight, en_bmi, en_plan, en_contact, en_address, myfile)
  	VALUES ('$en_firstname', '$en_lastname', '$en_age', '$en_gender', '$en_height', '$en_weight', '$bmi', '$en_plan', '$en_contact', '$en_address', '$filename')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      echo "<script>alert('Thank you for enrolling!</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  ?>


  <!-- Enrollment Off canvas -->
  <section class="container-fluid">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Enrollment Form</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <form action="home.php" method="post" enctype="multipart/form-data">
          <div class="mb-0">
            <label for="FirstName"><strong>Firstname</strong></label>
            <input type="text" class="form-control" id="en_firstname" name="en_firstname" placeholder="Firstname*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-1 mt-3">
            <label for="LastName"><strong>Lastname</strong></label>
            <input type="text" class="form-control" id="en_lastname" name="en_lastname" placeholder="Lastname*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-0">
            <label for="age"><strong>Age</strong></label>
            <input type="number" class="form-control" id="en_age" name="en_age" placeholder="Age*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-0">
            <label for="height"><strong>Height</strong></label><br>
            <input type="text" class="form-control" id="en_height" name="en_height" class="w-100 form-control" readonly />
          </div>
          <div class="mb-0">
            <label for="weight"><strong>Weight</strong></label><br>
            <input type="text" class="form-control" id="en_weight" name="en_weight" class="w-100 form-control" readonly />
          </div>
          <div class="mb-0">
            <label for="bmi"><strong>BMI</strong></label><br>
            <input type="text" class="form-control" id="bmi" name="bmi" class="w-100 form-control" readonly />
          </div>
          <div class="mb-0">
            <label for="gender"><strong>Gender</strong></label><br>
            <select class="form-control" id="en_gender" name="en_gender" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="mb-0">
            <label for="contact"><strong>Contact</strong></label><br>
            <input type="text" class="form-control" id="en_contact" name="en_contact" placeholder="Contact Number*" placeholder="Contact*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-0">
            <label for="address"><strong>Address</strong></label><br>
            <input type="text" class="form-control" id="en_address" name="en_address" placeholder="Address*" class="w-100 form-control" autocomplete="off" required />
          </div>
          <div class="mb-0">
            <label for="plan"><strong>Plans</strong></label><br>
            <select class="form-control" id="en_plan" name="en_plan" required>
              <option value="1">Plan 1 - 800</option>
              <option value="2">Plan 3 - 2,200</option>
              <option value="3">Plan 6 - 4,500</option>
              <option value="4">Plan 9 - 6,000</option>
              <option value="5">Plan 12 - 8,000</option>
            </select>
          </div> <br>
          <div class="col-12 hidden">
            <input id="sumbit-enroll" type="submit" name="uploadEnroll" value="Enroll" class="w-100 btn btn-dark text-white mt-2 ">
          </div>
          <!-- </form> -->

          <div class="imageupload">
            <p style="text-align: center; font-size: 12px;">Send your payment to our G-cash/Paymaya account <br>
              <strong> 09684063549 / 09094622446</strong>
            </p>
            <label for="upload" style="font-size: 13px;"><strong>Upload your screenshot of receipt</strong></label>
            <!-- <form method="post" id="form-upload" enctype="multipart/form-data"> -->
            <div class="label"> </div>
            <input type="file" name="myfile" id="myfile" required autocomplete="off" accept="image/*" class="form-control"> <br>
            <button id="upload" type="submit" name="upload" class="btn btn-block btn-primary form-control">Upload</button>
        </form>
      </div>

    </div>
  </section>

  <!--FOOTER-->
  <footer>
    <div class="container-fluid g-0">
      <div class="row g-0">
        <div class="footer">
          <!-- <div class="footer-desc col-md-10 mx-auto ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque laudantium facere fuga saepe deleniti autem reiciendis possimus rerum natus, soluta facilis suscipit necessitatibus atque recusandae repudiandae velit. Maxime, quos!</div> -->
          <div class="footer-social-media mx-auto">
            <a href="https://www.facebook.com/Pasig-Fitness-Gym-281844919658"><img src="image/facebook.png"></a>
            <a href="contact.php"><img src="image/email.png"></a>
            <a href="https://www.google.com.ph/maps/search/Pasig+Fitness+Gym+2nd+floor+Danny+Floro+Bldg.+C.+Raymundo+Avenue,+Caniogan,+Pasig+City/@14.5875503,121.0464469,13z/data=!3m1!4b1"><img src="image/address.png"></a>
          </div>
          <div class="footer-content">
            <ul>
              <li><a href="home.php">HOME</a></li>
              <li><a href="product.php">PRODUCTS</a></li>
              <li><a href="service.php">SERVICES</a></li>
              <li><a href="contact.php">CONTACT</a></li>
              <li><a href="contact.php">REGISTER</a></li>
            </ul>
          </div>
          <div class="footer-line"></div> <br>
          <p class="copyright">pasigfitnessgym @Copyright2022</p>
        </div>
      </div>
    </div>
  </footer>

  <!--CHATBOT-->
  <div class="chat-bar-collapsible">
    <button id="chat-button" type="button" class="collapsible">
      <i class="fa fa-comments" aria-hidden="true"></i>
    </button>
    <div class="content">
      <div id="full-chat-block">
        <!-- Message Container -->
        <div class="outer-container">
          <div class="header"> <img class="header-chat" src="image/logos.png"> Pasig Fitness Gym </div>
          <div class="form">
            <div class="bot-inbox inbox">
              <div class="icon ">
                <img class="icon " src="Image/bot.jpg">
              </div>
              <div class="msg-header">
                <img class="loading-buffer" src="image/loading-buffer.gif" alt="">
                <p class="intro">Good day! How can I help you?</p>
                <img class="gif hidden" src="image/display.gif">
              </div>
            </div>

            <div class="remove">
              <!-- form for calculating user bmi -->
              <div class="calculator-container " id="calculator-container">
                <div class="msg hidden"></div>
                <h4 class="h4">BMI CALCULATOR</h4>
                <input class="height-input-field" type="number" placeholder=" Your height in meter">
                <input class="weight-input-field" type="number" placeholder=" Your weight in kg">
                <button class="calculate-button"> Calculate</button> <br>
                <!-- <a class="link" href="https://www.rapidtables.com/convert/length/feet-inch-to-meter.html"> Check your height here!</a> -->
              </div>

              <div class="BMI-result hidden">
                <h4 class="result"></h4>
                <p class="result-statement"></p>
              </div> <br>

              <div class="bot-inbox inbox hidden">
                <div class="icon">
                  <img class="icon hidden" src="Image/bot.jpg">
                </div>
                <div class="msg-header hidden" id="underweight">
                  <img class="loading-buffer" src="image/loading-buffer.gif" alt="">
                  <p class="Reaction-to-bmi"> Oh Noh You are UNDERWEIGHT!</p>
                  <p class="Reaction-to-bmi"> But Don't Worry! We can help you gain weight and to become physically fit with our customized program for you. Just click the view more button.</p>
                </div>
                <div class="msg-header hidden" id="normal">
                  <img class="loading-buffer" src="image/loading-buffer.gif" alt="">
                  <p class="Reaction-to-bmi">Congrats you are HEALTHY!</p>
                  <p class="Reaction-to-bmi"> Try our program to become more healthy and FIT!. Just hit the view more button below.</p>
                </div>
                <div class="msg-header hidden" id="overweight">
                  <img class="loading-buffer" src="image/loading-buffer.gif" alt="">
                  <p class="Reaction-to-bmi"> You are OVERWEIGHT </p>
                  <p class="Reaction-to-bmi"> But Don't Worry! We can help you lose weight and to become physically fit with our customized program for you. Just click the view more button.</p>
                </div>
                <div class="msg-header hidden" id="obese">
                  <img class="loading-buffer" src="image/loading-buffer.gif" alt="">
                  <p class="Reaction-to-bmi"> You are OBESE </p>
                  <p class="Reaction-to-bmi"> But Don't Worry! We can help you lose weight and to become physically fit with our customized program for you. Just click the view more button.</p>
                </div>
              </div>

              <div class="Program hidden" id="program1">
                <!--Under Weight -->
                <h4>Here's our customized program that will fit on you</h4>
                <p>(The program will based on your BMI result)</p>
                <ul>
                  <li>Modified Squats</li>
                </ul>
                <ul>
                  <li>Modified Push-Ups</li>
                </ul>
                <ul>
                  <li>Bench Dips</li>
                </ul>
                <button class="View-Program" id="View" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">View Program</button>
              </div>

              <div class="Program hidden" id="program2">
                <!--Healthy -->
                <h4>Here's our customized program that will fit on you</h4>
                <p>(The program will based on your BMI result)</p>
                <ul>
                  <li>Bench Dips</li>
                </ul>
                <ul>
                  <li>Dumbell Lunge</li>
                </ul>
                <ul>
                  <li>Bench Press</li>
                </ul>
                <button class="View-Program" id="View" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">View Program</button>
              </div>
              <div class="Program hidden" id="program3">
                <!--Over weight -->
                <h4>Here's our customized program that will fit on you</h4>
                <p>(The program will based on your BMI result)</p>
                <ul>
                  <li>Bench Dips</li>
                </ul>
                <ul>
                  <li>Dumbell Lunge</li>
                </ul>
                <ul>
                  <li>Bench Press</li>
                </ul>
                <button class="View-Program " id="View" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">View Program</button>
              </div>
              <div class="Program hidden" id="program4">
                <!--Obese -->
                <h4>Here's our customized program that will fit on you</h4>
                <p>(The program will based on your BMI result)</p>
                <ul>
                  <li>Bench Dips</li>
                </ul>
                <ul>
                  <li>Dumbell Lunge</li>
                </ul>
                <ul>
                  <li>Bench Press</li>
                </ul>
                <button class="View-Program " id="View" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">View Program</button>
              </div>
            </div> <!-- End of remove div -->

          </div> <!-- End of form div -->
          <div class="chat-container">
            <!-- Messages -->
            <div id="chatbox">
              <h5 id="chat-timestamp"></h5>
            </div>
            <!-- User input box -->
            <div class="typing-field">
              <div class="bmi-icon">
                <input type="image" class="bmi-calculator-icon" id="Calculate" src="image/bmi.png" /><span class="tooltiptext">Compute BMI</span>
                <input type="image" class="bmi-calculator-icon hidden" id="Calculates" src="image/bmi.png" /> <span class="tooltiptext">Compute BMI</span>
              </div>
              <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--JQUERY AND SLICK-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <script src="js/chatbot.js"></script>
    <script src="js/bmi.js"></script>

    <script>
      function selectNum() {
        var price = document.uploadCheckout.price.value;
        var strUser = document.getElementById("inputQty").value;

        finalExpence = eval(price * strUser);
        document.getElementById('expense').innerHTML = finalExpence;
      }
    </script>

</body>

</html>