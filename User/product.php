<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
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
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=PT+Serif:wght@700&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--SLICK CAROUSEL-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

  <link rel="stylesheet" href="css/navbar.css">


</head>

<style type="text/css">
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #1b1c1e;
  }

  /*Product header */
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


  :root {
    --blue: #2980b9;
    --red: tomato;
    --orange: orange;
    --black: #333;
    --white: #fff;
    --bg-color: #eee;
    --dark-bg: rgba(0, 0, 0, .7);
    --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    --border: .1rem solid #999;
  }

  * {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
  }


  .container {
    max-width: 1200px;
    margin: 0 auto;
    /* padding-bottom: 5rem; */
  }

  section {
    padding: 2rem;
  }

  .heading {
    text-align: center;
    font-size: 3.5rem;
    text-transform: uppercase;
    color: #ff9f0f;
    margin-bottom: 5rem;
    font-family: 'PT Serif', serif;
  }

  .headings {
    text-decoration-line: underline;
    text-align: center;
    font-size: 2.5rem;
    text-transform: uppercase;
    color: var(--white);
    margin-bottom: 2rem;
  }


  .btn:hover,
  .option-btn:hover,
  .delete-btn:hover {
    background-color: var(--black);
  }

  .option-btn i,
  .delete-btn i {
    padding-right: .5rem;
  }

  .option-btn {
    background-image: linear-gradient(to right, #bd6500, #ffc480);
    background-color: #ff9f0f;
    border-radius: 5px;
    height: 40px;
    padding: 6px;
  }

  .option-btn a {
    text-decoration: none;
    color: white;
    font-family: 'Josefin Sans', sans-serif;
  }

  .outofstock {
    padding: 1.5rem;
    box-shadow: var(--box-shadow);
    border: var(--border);
    border-radius: .5rem;
    background-image: url("image/sold out.png");
    display: none;
    background-size: contain;
    background-color: #f6f6f6;
  }

  .products .box-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, 18rem);
    gap: 1.5rem;
    justify-content: center;
  }

  .products .box-container .box {
    text-align: center;
    padding: 1.5rem;
    box-shadow: var(--box-shadow);
    border: var(--border);
    border-radius: .5rem;
    background-color: #f6f6f6;
  }

  .products .box-container .box img {
    height: 8rem;
    width: 7.5rem;
  }

  .products .box-container .box h3 {
    margin: 1rem 0;
    font-size: 1.5rem;
    color: var(--black);
  }

  .products .box-container .box .price {
    font-size: 1.5rem;
    color: var(--black);
    font-weight: 900;
  }

  /*Header*/
  .Product {
    background-image: url("image/about1.1.jpg");
    background-size: cover;
    width: 100%;
    height: 300px;
    margin-top: none;
  }

  .Product h1 {
    font-size: 50px;
    font-weight: 700;
    color: #ff9f0f;
    padding-left: 230px;
    padding-top: 100px;
  }

  /*FOOTER*/
  .footer-container {
    width: 100%;
    max-width: 100%;
    height: auto;
    background-color: #141414;
  }

  /* content 1 */
  .footer-content1 {
    color: white;
    display: inline-block;
    padding: 40px 50px 10px 50px;
  }

  .footer-content1 p {
    color: white;
    display: block;
    text-align: left;
    font-size: 10px;
    padding-top: 20px;
  }

  .footer-content1 div h1 {
    font-size: 14px;
    padding: 50px 0px 10px 0px;
    text-align: left;
  }

  .footer-content div img {
    display: inline-block;
    height: 100px;
  }

  /* content 2 */
  .footer-content2 h1 {
    font-size: 17px;
    color: white;
    padding-bottom: 20px;
  }

  .footer-content2 {
    padding: 50px;
    float: left;
  }

  .footer-content2 a {
    text-decoration: none !important;
    color: #f6f6f6;
    font-size: 12px;
    text-align: left;
  }

  .footer-content2 p {
    color: #f6f6f6;
    font-size: 12px;
    padding: none;
    margin: none;
  }

  /* content 3 */
  .footer-content3 h1 {
    font-size: 17px;
    color: white;
    padding-bottom: 20px;
  }

  .footer-content3 {
    padding: 50px;
    float: left;
  }

  .footer-content3 a {
    text-decoration: none !important;
    color: #f6f6f6;
    font-size: 12px;
    text-align: left;
  }

  .footer-content3 p {
    color: #f6f6f6;
    font-size: 12px;
    padding: none;
    margin: none;
  }

  /* content 4 */
  .footer-content4 h1 {
    font-size: 17px;
    color: white;
    padding-bottom: 20px;
  }

  .footer-content4 {
    padding: 50px;
    float: left;
  }

  .footer-content4 a {
    text-decoration: none !important;
    color: #f6f6f6;
    font-size: 12px;
    text-align: left;
  }

  .footer-content4 p {
    color: #f6f6f6;
    font-size: 12px;
    padding: none;
    margin: none;
  }

  .copyright {
    color: white;
    font-size: 15px;
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

  /* mobile */
  @media screen and (min-width: 300px) and (max-width: 600px) {
    .footer-content1 {
      display: none;
    }
  }

  /* Tablet */
  @media screen and (max-width: 952px) {

    .footer-content1 {
      display: none;
    }

    .footer-container-mobile {
      display: flex;
    }
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
          <li class="nav-item">
            <a class="nav-link ms-5" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link ms-5" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item active ms-5">
            <a class="nav-link" aria-current="page" href="product.php">PRODUCT</a>
          </li>
          <li class="nav-item ms-5" style="margin-right:100px">
            <a class="nav-link me-5" aria-current="page" href="contact.php">CONTACT</a>
          </li>
        </ul>
        <div class="nav-icon d-flex">
          <button type=" button" class="btn btn-pri register_button ms-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">REGISTER</button>
          <a href="http://localhost/capstone/admin/enrolledDashboard.php"><i class="admin fa-solid fa-circle-user ms-3"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <div class="Product">
    <h1>Product</h1>
  </div>

  <!--Product-->


  <section class="products">
    <h1 class="heading">SUPPLEMENTS</h1>
    <div class="box-container">

      <?php
      include 'dbProduct.php';
      $select_products = mysqli_query($conn, "SELECT * FROM products WHERE prod_avail >= '1'");
      if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_products)) {
      ?>


          <form action="" method="POST" onClick="myFunction()">
            <div class="box">
              <img src="../uploaded_product/<?php echo $fetch_product['image']; ?>" alt="">
              <h3><b><?php echo $fetch_product['prod_name']; ?></b></h3>
              <div class="prices">Original Price: ₱<?php echo $fetch_product['price']; ?>.00</div>
              <div class="discount">Discount: <?php echo $fetch_product['discount']; ?>%</div>
              <div class="price">₱<?php echo $fetch_product['finalprice']; ?>.00</div>
              <div class="prod_avail" style="font-size:18px; color: red;">Available: <?php echo $fetch_product['prod_avail']; ?></div>

              <input type="hidden" name="product_id" value="<?php echo $fetch_product['id']; ?>">
              <input type="hidden" name="product_name" value="<?php echo $fetch_product['prod_name']; ?>">
              <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
              <input type="hidden" name="product_discount" value="<?php echo $fetch_product['discount']; ?>">
              <input type="hidden" name="product_finalprice" value="<?php echo $fetch_product['finalprice']; ?>">
              <input type="hidden" name="product_avail" value="<?php echo $fetch_product['prod_avail']; ?>">
              <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
              <div class="option-btn">
                <?php echo "<a href='checkout.php?productID=" . $fetch_product['id'] . "' >BUY NOW</a>"; ?>
              </div>
            </div>
          </form>

      <?php
        };
      };

      ?>


    </div>

  </section>
  <section class="products">

    <h1 class="headings">SOLD OUT</h1>

    <div class="box-container">
      <?php
      include 'dbProduct.php';
      $select_products = mysqli_query($conn, "SELECT * FROM outofstock");

      if (mysqli_num_rows($select_products) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_products)) {
      ?>


          <form action="" method="POST" onClick="myFunction()">
            <div class="box">
              <img src="../uploaded_product/<?php echo $fetch_product['image']; ?>" alt="">
              <h3><b><?php echo $fetch_product['prod_name']; ?></b></h3>
              <div class="price">₱<?php echo $fetch_product['finalprice']; ?>.00</div>
              <div class="prod_avail" style="font-size:18px; color: red;">OUT OF STOCK </div>


            </div>
          </form>

      <?php
        };
      };

      ?>


    </div>

  </section>

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

    <!-- Enrollment -->

    <?php
    error_reporting(0);

    // If upload button is clicked ...
    if (isset($_POST['uploadEnroll'])) {

      $filename = $_FILES["myfile"]["name"];
      $tempname = $_FILES["myfile"]["tmp_name"];
      $folder = "../paymentEnrolled/" . $filename;

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
        echo "<script>alert('Thank you for enrolling!').then(function()
      {
        window.location = 'product.php';
          }); </script>';</script>
      ";
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
          <form action="product.php" method="post" enctype="multipart/form-data">
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
  <?php
  }
  ?>
  </div>

  <!--FOOTER-->
  <footer>
    <div class="container-fluid g-0">
      <div class="row g-0">
        <div class="footer-container d-flex justify-content-center">

          <div class="footer-content1 col-md-3 col-xs-12">
            <div class="d-flex">
              <img src="image/logos.png" alt="Pasig Fitness Gym" style="height: 100px">
              <h1 style="color: white">PASIG FITNESS GYM</h1>
            </div>
            <p style="color: white; display: block">What you could do things today, do it now. So you can do more things tomorrow. Be part of the growing family of Pasig Fitness Gym, where you can strengthen muscle and achieve your body goal you desire. There are variety of services that we offered that make sure to fit on you.</p>
          </div>

          <div class="footer-container-mobile">
            <div class="footer-content2 col-md-4 col-xs-12">
              <h1> Our Services</h1>
              <p><a aria-current="page" href="index.php">Home</a></p>
              <p><a aria-current="page" href="product.php">Product</a></p>
              <p><a aria-current="page" href="index.php" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Register</a></p>
              <p><a aria-current="page" href="index.php" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">Enroll</a></p>
            </div>

            <div class="footer-content3 col-md-4 col-xs-12">
              <h1> Company</h1>
              <p><a>Terms Of Use</a></p>
              <p><a aria-current="page" href="contact.php">Contact Us</a></p>
            </div>

            <div class="footer-content4 col-md-4 col-xs-12">
              <h1>Follow Us</h1>
              <p><a>Facebook</a></p>
              <p><a>Instagram</a></p>
              <p><a>Twitter</a></p>
              <p><a>Tiktok</a></p>
            </div>
          </div>
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
                  <p class="Reaction-to-bmi"> Oh Noh You are UNDERWEIGHT!</p>
                  <p class="Reaction-to-bmi"> But Don't Worry! We can help you gain weight and to become physically fit with our customized program for you. Just click the view more button.</p>
                </div>
                <div class="msg-header hidden" id="normal">
                  <p class="Reaction-to-bmi">Congrats you are HEALTHY!</p>
                  <p class="Reaction-to-bmi"> Try our program to become more healthy and FIT!. Just hit the view more button below.</p>
                </div>
                <div class="msg-header hidden" id="overweight">
                  <p class="Reaction-to-bmi"> You are OVERWEIGHT </p>
                  <p class="Reaction-to-bmi"> But Don't Worry! We can help you lose weight and to become physically fit with our customized program for you. Just click the view more button.</p>
                </div>
                <div class="msg-header hidden" id="obese">
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
    <!-- <script src="js/product.js"></script> -->

</body>

</html>