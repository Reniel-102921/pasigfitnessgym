<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Josefin+Sans:wght@500&family=Libre+Baskerville&family=Nanum+Myeongjo:wght@800&family=PT+Serif:wght@700&family=Playfair+Display+SC&family=Prata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--SLICK CAROUSEL-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/navbar.css">

</head>


<body>

  <!--NAVIGATOR-->
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top nav-bg">
    <div class="container-fluid">
      <div class="navbar-brand">
        <img src="image/logos.png">
        <p>Pasig Fitness Gym</p>
      </div>
      <button class="navbar-toggler" type="button" flex-nowrap fixed-right data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center navbar-dark" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-center mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link ms-5" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ms-5" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item ms-5">
            <a class="nav-link" aria-current="page" href="product.php">PRODUCT</a>
          </li>
          <li class="nav-item ms-5" style="margin-right:100px">
            <a class="nav-link me-5" aria-current="page" href="contact.php">CONTACT</a>
          </li>
        </ul>
        <div class="nav-icon  d-flex">
          <button type=" button" class="btn btn-pri register_button ms-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">REGISTER</button>
          <a href="http://localhost/capstone/admin/enrolledDashboard.php"><i class="admin fa-solid fa-circle-user ms-3"></i></a>
        </div>
      </div>
    </div>
  </nav>

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
      echo "<script>alert('Thank You $firstname $lastname'); window.location='index.php?success=$qrimage';</script>";
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
        <a href="index.php" class="btn btn-primary w-100">Go Back To Generate Again</a>
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
        window.location = 'index.php';
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
          <form action="index.php" method="post" enctype="multipart/form-data">
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

    <!--SLIDE-->
    <div class="heading">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="img-fluid" src="image/homeSlide1.jpg" width="100%" height="80vh">
          </div>

          <div class="carousel-item">
            <img class="img-fluid" src="image/homeSlide1.jpg" width="100%" height="80vh">
          </div>

          <div class="carousel-item">
            <img class="img-fluid" src="image/homeSlide1.jpg" width="100%" height="80vh">
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        <div class="carousel-caption justify-content-center">
          <h1>Don???t Take Tension Of Weight <br>Just Do Gym With No Hate</h1>
          <p>Be physically fit at an Affordable rate <br>Register Now and Get Fit</p>
          <button type="button" class="Enroll btn btn-pri" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">ENROLL NOW</button>

        </div>
      </div>
    </div>

    <!--ABOUT-->
    <div class="container-fluid ">
      <div class="row about ">
        <div class="img-animation col-md-4 ">
          <div class="model mx-auto">
            <img class="man img-fluid modelAbout1" src="image/modelAbout.png" alt="modelAbout">
          </div>
        </div>
        <div class="aboutText mx-auto col-md-5 ">
          <img src="image/logos.png" alt="logo">
          <h1>Pasig Fitness Gym</h1>
          <p>What you could do things today, do it now. So you can do more things tomorrow. Be part of the growing family of Pasig Fitness Gym, where you can strengthen muscle and achieve your body goal you desire. There are variety of services that we offered that make sure to fit on you. </p>
          <a href="about.php"><button type="button" class="btn btn-pri mt-3">View More</button></a>
        </div>
      </div>
    </div>

    <!-- GOAL -->
    <div class="container-fluid-lg focus">
      <h5>Focus on Goal</h5>
      <h1>OUR MAIN FOCUS</h1>
      <div class="card text-center py-5">
        <i class="fa-solid fa-pump-medical" style="font-size:40px"></i>
        <div class="card-body">
          <h4 class="card-title">Clean Fitness Center</h4>
          <p class="card-text">Dispensers with hand sanitizer, and separate cleansing cloths for the equipment and for people are accessible throughout the fitness center.</p>
        </div>
      </div>
      <div class="card text-center py-5">
        <i class="fa-solid fa-person-running" style="font-size:40px"></i>
        <div class="card-body">
          <h4 class="card-title">Qualified Coaches</h4>
          <p class="card-text">A certified personal trainer is someone who is trained in creating and implementing safe and effective exercise programs for their clients.</p>
        </div>
      </div>
      <div class="card text-center py-5">
        <i class="fa-solid fa-dumbbell" style="font-size:40px"></i>
        <div class="card-body">
          <h4 class="card-title">Modern Equipment</h4>
          <p class="card-text">The functions that come with gym equipment help you monitor your progress and keep you motivated toward achieving your fitness goals.</p>
        </div>
      </div>
    </div>

    <!-- PLAN -->
    <div class="plan">
      <div class="planContent">
        <div class="planImg">
          <img src="image/planModel.jpg" alt="">
        </div>
        <div class="planPrice">
          <div class="planTitle">
            <h1>OUR PRICING</h1>
          </div>
          <h1>Daily</h1>
          <p class="mb-5">60 pesos</p>
          <h1>Monthly</h1>
          <p>800 pesos</p>
        </div>
      </div>
    </div>

    <!--Products-->
    <div class="products">
      <div class="products_container mx-auto">
        <div class="productsTitle">
          <h1>Our Products</h1>
        </div>
        <div class="slider">
          <div class="item">
            <img class="item-img1 mx-auto" src="uploaded_product/bodytech.png">
            <h1>BODY TECH</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img2 mx-auto" src="../uploaded_product/creatine.png">
            <h1>CREATINE</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img3 mx-auto" src="../uploaded_product/creatinex3.png">
            <h1>CREATINE X3</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img4 mx-auto" src="../uploaded_product/goldstandard.png">
            <h1>GOLD STANDARD</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img5 mx-auto" src="../uploaded_product/iso100.png">
            <h1>ISO 100</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img6 mx-auto" src="../uploaded_product/kaged.png">
            <h1>KAGED</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img7 mx-auto" src="../uploaded_product/kasein.png">
            <h1>KASEIN</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img8 mx-auto" src="../uploaded_product/masseffect.png">
            <h1>MASS EFFECT</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img9 mx-auto" src="../uploaded_product/massgainer.png">
            <h1>MASS GAINER</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img10 mx-auto" src="../uploaded_product/nitrotech.png">
            <h1>NITRO TECH</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img11 mx-auto" src="../uploaded_product/optimen.png">
            <h1>OPTIMEN</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
          <div class="item">
            <img class="item-img12 mx-auto" src="../uploaded_product/preworkout.png">
            <h1> PRE WORKOUT</h1>
            <div class="hoverButton">
              <a href="product.php"><button type="button" name="button">View More</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

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

    <!--SLICK SLIDESHOW-->
    <script>
      $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 5,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true
      });
    </script>
</body>

</html>