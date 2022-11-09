<?php
// Initialize the session
session_start();

//  Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: loginDashboard.php");
  exit;
}
?>

<?php include "db.php";

$date = date('Y-m-d');

$sqlEnrolled = "SELECT COUNT(*) as TotalEnrolled from enrolled WHERE en_date = '$date'";
$resultEnrolled = $con->query($sqlEnrolled);
$rowEnrolled = mysqli_fetch_assoc($resultEnrolled);

$TotalEnrolled = $rowEnrolled['TotalEnrolled'];

$sqlRegistered = "SELECT COUNT(*) as TotalRegistered from client WHERE dateRegistered = '$date'";
$resultRegistered = $con->query($sqlRegistered);
$rowRegistered = mysqli_fetch_assoc($resultRegistered);

$TotalRegistered = $rowRegistered['TotalRegistered'];

?>


<!-- daily report graph -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['bar']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['date', 'Registered', 'Enrolled'],
      ['<?php echo $date; ?>', '<?php echo $TotalRegistered; ?>', '<?php echo $TotalEnrolled; ?>'],

    ]);
    var options = {
      chart: {
        title: 'Registered and Enrolled per Day',
        subtitle: '<?php echo $date; ?>',
      },
      bars: 'vertical' // Required for Material Bar Charts.
    };


    var chart = new google.charts.Bar(document.getElementById('barchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>

<head>
  <meta charset="utf-8">
  <!--BOOTSTRP-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
  <script src="myscripts.js"></script>
  <!-- <script src="sessionTimeout_dashboard.js"></script> -->

  <title>Enrolled</title>

</head>

<body onload="initClock()">
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
                    <a href="" data-toggle="modal" data-target="#mymodel" class="nav-link px-0 ps-xl-2"><span class="d-none d-sm-inline"><i class="fa-solid fa-user-plus" style="font-size:15px;"></i> Insert</span></a>
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
              <li><a class="dropdown-item" href="menu.php">Admin</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logoutDashboard.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- end nav -->

      <div class="col py-3 d-flex" style="padding-left: 270px;">
        <div class="container ms-4 px-4 py-3 ">
          <!-- <h2>Summary Report</h2> -->
          <h1 class="summaryHeader pt-2">Monthly tally of Enrolees Status</h1>
          <div class="row">
            <div class="col-xl-3 col-sm-6 ms-3 m-4 summaryReport" style="color: #3af23a;border: 2px solid #3af23a;box-shadow: 2px 2px 6px 1px #3af23a;">
              <h1>Normal</h1>
              <?php

              include 'db.php';

              //getting a whole number of customer
              $sql = "SELECT COUNT(*) AS TotalCustomer FROM enrolled";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);

              //customer with Normal weight
              $sqlNormal = "SELECT COUNT(*) AS Normal FROM `enrolled` WHERE en_bmi > 18.5 AND en_bmi < 24.9";
              $resultNormal = mysqli_query($con, $sqlNormal);

              $rowNormal = mysqli_fetch_assoc($resultNormal);
              $normal = ($rowNormal['Normal'] / $row['TotalCustomer']) * 100;

              echo number_format((float)$normal, 0, '.', '');
              echo "%";
              echo "<p style='font-size:15px; margin-top: 7%;'>" . $rowNormal['Normal'] . ' ' .
                "<b style='color:#ffffff; font-size:17px' >Person are Normal</b> </p>";
              ?>
              <p></p>
            </div>
            <div class="col-xl-3 col-sm-6 m-4 summaryReport" style="color: #4e4ef2; border: 2px solid #4e4ef2;box-shadow: 2px 2px 6px 1px #4e4ef2;">
              <h1>UnderWeight</h1>
              <?php
              //customer with Underweight weight
              $sqlUnderweight = "SELECT COUNT(*) AS Underweight FROM `enrolled` WHERE en_bmi < 18.5";
              $resultUnderweight = mysqli_query($con, $sqlUnderweight);

              $rowUnderweight = mysqli_fetch_assoc($resultUnderweight);
              $underweight = ($rowUnderweight['Underweight'] / $row['TotalCustomer']) * 100;

              echo number_format((float)$underweight, 0, '.', '');
              echo "%";
              echo "<p style='font-size:15px; margin-top: 7%;'>" . $rowUnderweight['Underweight'] . ' ' .
                "<b style='color:#ffffff; font-size:17px' >Person are Underweight</b> </p>";
              ?>
            </div>
            <div class="col-xl-3 col-sm-6 m-4 summaryReport" style="color:#fa3c3c; border: 2px solid #fa3c3c;box-shadow: 2px 2px 6px 1px #fa3c3c;">
              <h1>OverWeight</h1>
              <?php
              //customer with OverWeight weight
              $sqlOverWeight = "SELECT COUNT(*) AS OverWeight FROM `enrolled` WHERE en_bmi > 25.0 AND en_bmi < 29.9";
              $resultOverWeight = mysqli_query($con, $sqlOverWeight);

              $rowOverWeight = mysqli_fetch_assoc($resultOverWeight);
              $overWeight = ($rowOverWeight['OverWeight'] / $row['TotalCustomer']) * 100;

              echo number_format((float)$overWeight, 0, '.', '');
              echo "%";
              echo "<p style='font-size:15px; margin-top: 7%;'>" . $rowOverWeight['OverWeight'] . ' ' .
                "<b style='color:#ffffff; font-size:17px';>Person are Overweight</b> </p>";
              ?>
            </div>
            <div class="col-xl-3 col-sm-6 m-4 summaryReport" style="color: #f5f042; border: 2px solid #f5f042;box-shadow: 2px 2px 6px 1px #f5f042;">
              <h1 style="color:#ffffff;">Obies</h1>
              <?php
              //customer with Obies weight
              $sqlObies = "SELECT COUNT(*) AS Obies FROM `enrolled` WHERE en_bmi > 30.0";
              $resultObies = mysqli_query($con, $sqlObies);

              $rowObies = mysqli_fetch_assoc($resultObies);
              $obies = ($rowObies['Obies'] / $row['TotalCustomer']) * 100;

              echo number_format((float)$obies, 0, '.', '');
              echo "%";
              echo "<p style='font-size:15px; margin-top: 7%;'>" . $rowObies['Obies'] . ' ' .
                "<b style='color:#ffffff; font-size:17px';>Person are Obies</b> </p>";
              ?>
            </div>
          </div>

          <div class="row">
            <!-- bar graph -->
            <div class="col-7 mt-5 p-4 ms-4 me-2 summary-graph">
              <div class="row ps-3">
                <h3>Summary Enrolled Customer</h3>
                <div class="col-6 ps-5">
                  <?php include('db.php');

                  $sql = "SELECT COUNT(*) AS lastMonth FROM enrolled WHERE en_date > '2022-10-01' AND en_date < '2022-10-31'";
                  $result = mysqli_query($con, $sql);
                  $data = mysqli_fetch_assoc($result);

                  $dataLastMonth = ($data['lastMonth'] / 50) * 100; ?>
                  <!-- 
                  // echo "<p>Last Month</p>";
                  // echo "<i class='fa-sharp fa-solid fa-calendar-check mt-1 ms-2'></i>";
                  // echo "<progress class='progress-bar h-100' role='progressbar' aria-value='" . $data['lastMonth'] . "' aria-max='100'></progress>";
                  // echo "<h6 class='ps-2 m-1'>" . $data['lastMonth'] . "</h6>"; -->

                  <div class='divProgress p-1'>
                    <i class='fa-sharp fa-solid fa-calendar-check mt-2 ms-2'></i>
                    <div class="mt-3" style="height: 25px; width:150px; border: 2px solid #141414; border-radius:10px; margin-left: 35px;">
                      <div class="ps-2 bg-light" style="height:20px; width: <?php echo $dataLastMonth; ?>%; border-radius:5px;"><?php echo $data['lastMonth']; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <?php include('db.php');

                  $sql = "SELECT COUNT(*) AS thisMonth FROM enrolled WHERE en_date > '2022-11-01' AND en_date < '2022-11-31'";
                  $result = mysqli_query($con, $sql);
                  $data = mysqli_fetch_assoc($result);

                  $dataThisMonth = ($data['thisMonth'] / 50) * 100; ?>


                  <!-- // echo "<p>This Month</p>";
                  // echo "<div class='divProgress p-1'>";
                  // echo "<i class='fa-solid fa-calendar mt-1 ms-2'></i>";
                  // echo "<div class='progress w-75 mt-2'>";
                  // echo "<progress class='progress-bar h-100' role='progressbar' aria-value='" . $data['thisMonth'] . "' aria-max='100'></progress>";
                  // echo "<h6 class='ps-2 m-1'>" . $data['thisMonth'] . "</h6>";

                  // echo "</div>";
                  // echo "</div>";
                  ?> -->

                  <div class='divProgress p-1'>
                    <i class='fa-sharp fa-solid fa-calendar-check mt-2 ms-2'></i>
                    <div class="mt-3" style="height: 25px; width:150px; border: 2px solid #141414; border-radius:10px; margin-left: 35px;">
                      <div class="ps-2 bg-light" style="height:20px; width: <?php echo $dataThisMonth; ?>%; border-radius:5px;"><?php echo $data['thisMonth']; ?>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="contentGraph">
                <div id="barchart_material" style=" width: 88%; height: 200px;"></div>
              </div>
            </div>
            <!-- time -->
            <div class="col-4 mt-5 ms-3 pt-1">
              <div class="ms-3 dateTime">
                <div class="date">
                  <span id="dayname">Day</span>,
                  <span id="month">month</span>
                  <span id="daynum">00</span>,
                  <span id="year">Year</span>
                </div>
                <div class="time">
                  <span id="hour">00</span>:
                  <span id="minutes">00</span>:
                  <span id="seconds">00</span>
                  <span id="period">AM</span>
                </div>
              </div>
              <!-- piechart -->
              <div class=" row mt-4 ms-1">
                <div class="col-12 " style="height: 325px;">
                  <div class="col-4 text-light piechart">
                    <?php
                    include 'db.php';

                    //get the total number who registered
                    $sql = "SELECT COUNT(*) AS TotalRegistered from client";
                    $result = $con->query($sql);
                    $row = mysqli_fetch_assoc($result);

                    //get the total of paid registered customer
                    $sqlPaid = "SELECT COUNT(*) AS totalNull FROM client WHERE datepaid IS NULL";
                    $resultPaid = $con->query($sqlPaid);
                    $rowPaid = mysqli_fetch_assoc($resultPaid);

                    $totalPaid = $row['TotalRegistered'] - $rowPaid['totalNull'];

                    ?>
                    <!-- PieChart -->
                    <script type="text/javascript">
                      google.charts.load("current", {
                        packages: ["corechart"]
                      });
                      google.charts.setOnLoadCallback(pieChart);

                      function pieChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Column', 'Customer'],
                          ['Registered', <?php echo $row['TotalRegistered']; ?>],
                          ['Paid', <?php echo $totalPaid; ?>],
                        ]);

                        var options = {
                          pieHole: 0.3,
                          colors: ['#282928', '#41e83f'],
                          backgroundColor: 'none',
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                        chart.draw(data, options);
                      }
                    </script>

                    <p class="w-75 pt-4 ps-5 text-dark">The Customers who Registered and the only customer who paid</p>

                    <div id="donutchart" class="h-75" style="width: 400px; height: 500px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-11 bg-dark mt-5 ms-4 tableData">
              <div class="enrolled bg-dark position:absolute;" name="enrolled">
                <div class="row mt-3">
                  <div class="col-6">
                    <h1 style="font-size:30px">Enrolled Customer</h1>
                  </div>
                  <div class="col-6 search text-end position: relative;">
                    <form method="post">
                      <input id="inputSearch" type="text" placeholder="Search" name="searchData" autocomplete="off">
                      <button id="searchBtn" class="btn" type="submit" name="searchCustomer">Search</button>
                    </form>
                  </div>
                </div>
                <div class="database">
                  <table class="database-table">
                    <thead class="sticky-top">
                      <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Full Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                      </tr>
                    </thead>

                    <?php
                    include('db.php');
                    if (isset($_POST['searchCustomer'])) {
                      $searchData = $_POST['searchData'];
                      $sql = "SELECT en_ID, en_date, en_firstname, en_lastname, en_age, en_gender, en_address FROM enrolled WHERE en_ID LIKE '%$searchData%' or en_firstname LIKE '%$searchData%' or en_date LIKE '%$searchData%' ORDER BY en_ID";
                    } else {
                      $sql = "SELECT en_ID, en_date, en_firstname, en_lastname, en_age, en_gender, en_address FROM enrolled ORDER BY en_ID";
                    }

                    $result = $con->query($sql);
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row['en_ID'] . "</td>";
                      echo "<td>" . $row['en_date'] . "</td>";
                      echo "<td> <a href='enrolledPerson.php?id=" . $row['en_ID'] . "'>" . $row['en_firstname'] . ' ' . $row['en_lastname'] . "</a></td>";
                      echo "<td>" . $row['en_age'] . "</td>";
                      echo "<td>" . $row['en_gender'] . "</td>";
                      echo "<td>" . $row['en_address'] . "</td>";
                      echo "</tr>";
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

      <!-- insert customer -->
      <div class="modal" id="mymodel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="mx-auto"> Enroll Customer</h3>
              <button type="button" class="close" data-dismiss="modal"> &times;</button>
            </div>

            <div class="modal-body">
              <form action="enrolledDashboard.php" method="post">
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" placeholder="Enter Firstname" name="en_firstname" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter Lastname" name="en_lastname" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Age</label>
                  <input type="number" class="form-control" placeholder="Enter Age" name="en_age" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Gender</label>
                  <select name="en_gender" class="form-control">
                    <option value="">Choose Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Contact</label>
                  <input type="number" class="form-control" placeholder="0987-654-3210" name="en_contact" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="text" class="form-control" placeholder="Enter Address" name="en_address" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Height</label>
                  <input type="text" class="form-control" placeholder="Enter in cm" name="en_height" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Weight</label>
                  <input type="number" class="form-control" placeholder="Enter in kg" name="en_weight" autocomplete="off" required>
                </div>
                <div class="modal-footer mt-3">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" onclick="add" name="addCustomer" class="btn btn-pri"> Submit</button>
                </div>
            </div>
            </form>


            <?php
            function add($en_firstname, $en_lastname, $en_age, $en_gender, $en_contact, $en_address, $en_height, $en_weight)
            {
              include('db.php');
              $sql = "INSERT INTO enrolled (en_firstname, en_lastname, en_age, en_gender, en_contact, en_address, en_height, en_weight)
            VALUES ('$en_firstname', '$en_lastname', '$en_age', '$en_gender', '$en_contact', '$en_address', '$en_height', '$en_weight')";
              $result = $con->query($sql);

              if ($result == TRUE) {
                echo '<script> swal("Successfully Recorded", "", "success").then(function()
                {
                  window.location = "enrolledDashboard.php";
                    }); </script>';
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
              $con->close();
            }

            if (isset($_POST['addCustomer'])) {
              echo add(
                $_POST['en_firstname'],
                $_POST['en_lastname'],
                $_POST['en_age'],
                $_POST['en_gender'],
                $_POST['en_contact'],
                $_POST['en_address'],
                $_POST['en_height'],
                $_POST['en_weight'],
              );
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>