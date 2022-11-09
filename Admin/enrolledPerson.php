<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!--BOOTSTRP-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ajax -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Martel+Sans:wght@300&family=Noto+Sans+JP:wght@700&family=Pragati+Narrow&display=swap" rel="stylesheet">

  <!--sweetAlert-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="dashboard.css">

  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <script src="sessionTimeout_dashboard.js"></script> -->

  <title>Enrolled Customer</title>
</head>

<style>
  .barchart {
    background-color: #010101;
    border: 6px solid #2e2e2e;
    height: auto;
    margin-right: 30px;
    border-radius: 30px;
    margin-bottom: 5px;
    margin-top: 30px;
    width: 95%;
    box-shadow: 0 0 10px #2e2e2e;
  }

  .barchart h3 {
    font-family: 'Playfair Display SC', serif;

  }

  .database-customer {
    width: 100%;
    height: 100px;
    text-align: center;
    margin-top: 10px;
    border-radius: 10px;
  }

  .database-customer th {
    font-weight: bold;
    height: 50px;
    border-bottom: 3px solid #202020;
    color: #919191;
    font-size: 17px;
    font-family: 'Adamina', serif;
    text-align: center;
  }

  .database-customer td {
    color: white;
    font-family: 'Martel Sans', sans-serif;
  }

  .modal .modal-footer {
    height: 100%;
  }
</style>

<body>

  <div class="container-fluid">
    <div class="row flex-nowrap fixed-right nav">
      <div class="col-auto col-md-2 col-xl-2 px-sm-1 px-0 bg-dark" style="position: fixed ;">
        <div class=" d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="menuDashboard d-none my-4 mx-3 d-sm-inline">Dashboard Menu</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <div class="content-nav" style="background-color: rgba(115, 115, 115, 0.56);border-radius: 5px;">
                <a href="enrolledDashboard.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-house"></i><span class="ms-3 d-none d-sm-inline">Home&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="content-nav">
                <a href="pinWalkin.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-users" style="padding-left: 6px;padding-right: 6px;"></i><span class="ms-3 d-none d-sm-inline">Walkin &emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="content-nav">
                <a href="pinOrder.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-cart-shopping"></i><span class="ms-3 d-none d-sm-inline">Order&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="content-nav">
                <a href="pinProduct.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-jar" style="padding-left: 12px;padding-right: 12px;"></i><span class="ms-3 d-none d-sm-inline">Products&emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <div class=content-nav>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 ps-xl-2 align-middle">
                  <i class="fa-solid fa-gear" style="padding-left: 8px;padding-right: 8px;"></i><span class="ms-3 d-none d-sm-inline">Tools&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
              <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                <div class="content-nav m-3">
                  <li class="w-100">
                    <a href="enrolledDashboard.php" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-arrow-rotate-right" style="font-size:15px;"></i> Refresh</span></a>
                  </li>
                </div>
                <div class="content-nav m-3">
                  <li>
                    <a href="" data-toggle="modal" data-target="#myModal" class="nav-link px-0 ps-xl-2"><span class="d-none d-sm-inline"><i class="fa-sharp fa-solid fa-pen-to-square" style="font-size:15px;"></i> Update</span></a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <div class="content-nav">
                <a href="#" class="nav-link px-0 ps-xl-2 align-middle">
                  <i class="fa-solid fa-store"></i> <span class="ms-3 d-none d-sm-inline">Buy &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </span>
                </a>
              </div>
            </li>
          </ul>
          <hr>
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="image/logo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
              <span class="d-none d-sm-inline mx-1">Pasig Fitness Gym</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="pinAdmin.php">Admin</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="menu.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col py-3 ms-5 d-flex" style="padding-left: 200px;">
        <div class="container px-4 py-3 ">
          <div class="barchart">
            <h3 class="text-light m-3">Customer's Record</h3>
            <table class="mt-4 m-2 database-customer">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Height</th>
                  <th>Weight</th>
                  <th>BMI</th>
                  <th>Contact</th>
                  <th>Address</th>
                  <th>Plan</th>
                  <th>Status</th>
                </tr>
              </thead>

              <?php
              $id = $_GET['id'];
              include('db.php');

              $nameSql = "SELECT * from enrolled WHERE en_ID ='$id' ";
              $nameResult = $con->query($nameSql);
              $data = mysqli_fetch_assoc($nameResult);

              $sql = "SELECT * FROM enrolled WHERE en_ID = '$id' ORDER BY en_date DESC";
              $result = $con->query($sql);
              while ($row = $result->fetch_assoc()) {

                //get the weight status of the Customer
                if ($row['en_bmi'] <= 18.5) {
                  $en_status = 'Underweight';
                } elseif ($row['en_bmi'] >= 18.5) {
                  $en_status = 'Normal';
                } elseif ($row['en_bmi'] >= 25.0) {
                  $en_status = 'Overweight';
                } elseif ($row['en_bmmi'] >= 30.0) {
                  $en_status = 'Obese';
                } else {
                  // code...
                }
                echo "<tr>";
                echo "<td>" . $row['en_ID'] . "</td>";
                echo "<td>" . $row['en_date'] . "</td>";
                echo "<td>" . $row['en_firstname'] . "</td>";
                echo "<td>" . $row['en_lastname'] . "</td>";
                echo "<td>" . $row['en_age'] . "</td>";
                echo "<td>" . $row['en_gender'] . "</td>";
                echo "<td>" . $row['en_height'] . "</td>";
                echo "<td>" . $row['en_weight'] . "</td>";
                echo "<td>" . $row['en_bmi'] . "</td>";
                echo "<td>" . $row['en_contact'] . "</td>";
                echo "<td>" . $row['en_address'] . "</td>";
                echo "<td>" . $row['en_plan'] . "</td>";
                echo "<td>" . $en_status . "</td>";
                echo "</tr>";
              }
              $con->close();
              ?>
            </table>
          </div>

          <div class="col-11 bg-dark mt-5 ms-4 tableData">
            <div class="enrolled bg-dark position:absolute;" name="enrolled">
              <div class="row mt-3">
                <div class="col-6">
                  <?php echo "<h1 style='font-size:30px'>" . $data['en_firstname'] . "'s History Progress" . "</h1>"; ?>
                </div>
                <div class="col-6 search text-end position: relative;">
                  <form method="post">
                    <input id="inputSearch" type="text" placeholder="Search" name="searchData" autocomplete="off">
                    <button id="searchBtn" class="btn" type="submit" name="searchCustomer">Search</button>
                  </form>
                </div>
              </div>
              <div class=" mt-4 database">
                <table class="database-table">
                  <thead class="sticky-top">
                    <tr>
                      <th>Date</th>
                      <th>Activity/s</th>
                      <th>Duration</th>
                      <th>Weight</th>
                      <th>BMI</th>
                      <th>Status</th>
                    </tr>
                  </thead>

                  <?php

                  $id = $_GET['id'];
                  include('db.php');

                  if (isset($_POST['searchCustomer'])) {
                    $searchData = $_POST['searchData'];
                    $result = mysqli_query($con, "SELECT ph_Date, ph_Activities, ph_Duration, ph_Weight FROM progresshistory WHERE ph_Date LIKE '%$searchData%' or ph_Activities LIKE '%ph_Activities%'and en_ID = '$id'");
                  } else {
                    $result = mysqli_query($con, "SELECT progresshistory.ph_Date, progresshistory.ph_Activities, progresshistory.ph_Duration, progresshistory.ph_Weight,
                progresshistory.ph_Weight/(enrolled.en_height * enrolled.en_height) AS 'ph_BMI' FROM progresshistory LEFT JOIN enrolled on enrolled.en_ID = progresshistory.en_ID
                WHERE progresshistory.en_ID = '$id' ORDER BY progresshistory.ph_Date DESC");
                  }

                  while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                      <!-- get the weight status of the Customer -->
                      <?php
                      if ($row['ph_BMI'] <= 18.5) {
                        $ph_status = 'Underweight';
                      } elseif ($row['ph_BMI'] >= 18.5 && $row['ph_BMI'] <= 24.9) {
                        $ph_status = 'Normal';
                      } elseif ($row['ph_BMI'] >= 25.0 && $row['ph_BMI'] >= 29.9) {
                        $ph_status = 'Overweight';
                      } elseif ($row['ph_BMI'] >= 30.0) {
                        $ph_status = 'Obese';
                      } else {
                        // code...
                      }
                      ?>
                      <td data-target="ph_Date"><?php echo $row['ph_Date']; ?></td>
                      <td data-target="ph_Activities"><?php echo $row['ph_Activities']; ?></td>
                      <td data-target="ph_Durat ion"><?php echo $row['ph_Duration']; ?></td>
                      <td data-target="ph_Weight"><?php echo $row['ph_Weight']; ?></td>
                      <td data-target="ph_BMI"><?php echo $row['ph_BMI']; ?></td>
                      <td data-target="ph_status"><?php echo $ph_status; ?></td>
                    </tr>
                  <?php
                  }
                  $con->close();
                  ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!--update progress-->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="mx-auto"> Update Progress</h3>
            <button type="button" class="close" data-dismiss="modal"> &times;</button>
          </div>

          <div class="modal-body">
            <form action="enrolledPerson.php" method="post">
              <div class="mb-3">
                <label class="form-label">Cust. ID</label>
                <input type="text" class="form-control" id="en_ID" placeholder="Enter Customer ID" name="en_ID" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Activity/s</label>
                <input type="text" class="form-control" id="ph_Activities" placeholder="Enter Activity" name="ph_Activities" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Duration</label>
                <input type="text" class="form-control" id="ph_Duration" placeholder="hr/s of Workout" name="ph_Duration" autocomplete="off" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Weight</label>
                <input type="number" class="form-control" id="ph_Weight" placeholder="Enter Weight" name="ph_Weight" autocomplete="off" required>
              </div>
              <div class="modal-footer mt-3">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" onclick="add" name="addCustomer" class="btn btn-pri">Submit</button>
              </div>
            </form>

            <?php

            function add($ph_Activities, $ph_Duration, $ph_Weight, $en_ID)
            {

              include('db.php');

              $nameSql = "SELECT * from enrolled WHERE en_ID ='$id' ";
              $nameResult = $con->query($nameSql);
              $data = mysqli_fetch_assoc($nameResult);

              $sql = "INSERT INTO progresshistory (ph_Activities, ph_Duration, ph_Weight, en_ID)
            VALUES ('$ph_Activities', '$ph_Duration', '$ph_Weight', '$en_ID')";
              $result = $con->query($sql);


              if ($result == TRUE) { ?>
                echo '<script>
                  swal("Successfully Recorded", "", "success").then(function() {
                    window.location = "enrolledPerson.php?id=<?php echo $_POST['en_ID']; ?>";
                  });
                </script>';
            <?php
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
              $con->close();
            }

            if (isset($_POST['addCustomer'])) {
              echo add($_POST['ph_Activities'], $_POST['ph_Duration'], $_POST['ph_Weight'], $_POST['en_ID'],);
            }
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="myscripts.js"></script>

</body>

</html>