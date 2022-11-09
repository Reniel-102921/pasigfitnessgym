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
  <script src="myscripts.js"></script>
  <script src="sessionTimeout_dashboard.js"></script>

  <title>Walkin</title>

</head>

<style>
  .database-table th {
    background-color: #f0f0f0;
  }

  .enrolled h1 {
    color: #f0f0f0;
    font-size: 25px;
    font-weight: bold;
  }

  .modal-title {
    font-size: 20px;
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
              <div class="content-nav">
                <a href="enrolledDashboard.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-house"></i><span class="ms-3 d-none d-sm-inline">Home&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <div class="content-nav" style="background-color: rgba(115, 115, 115, 0.56);border-radius: 5px;">
                <a href="walkin.php" class="nav-link align-middle px-0 ps-xl-2">
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
                    <a href="walkin.php" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-arrow-rotate-right" style="font-size:17px;"></i> Refresh</span></a>
                  </li>
                </div>
                <div class="content-nav m-3">
                  <li>
                    <a href="#" data-toggle="modal" data-target="#mymodel" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-user-plus" style="font-size:15px;"></i> Insert Client</span></a>
                  </li>
                </div>
                <div class="content-nav m-3">
                  <li>
                    <a href="pinDelete.php" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-trash-can" style="font-size:17px;"></i> Delete Customer</span></a>
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
      <div class="col ms-5 d-flex" style="padding-left: 200px;">
        <div class="container ms-4 px-4">
          <div class="row">
            <div class="col-11 bg-dark mt-5 tableData">
              <div class="enrolled bg-dark position:absolute;" name="enrolled">
                <div class="row mt-3">
                  <div class="col-6">
                    <h1 style="font-size:30px">Registered Customer</h1>
                  </div>
                  <div class="col-6 search text-end position: relative;">
                    <form method="post">
                      <input id="inputSearch" type="text" placeholder="Search" name="searchData" autocomplete="off">
                      <button id="searchBtn" class="btn" type="submit" name="searchCustomer">Search</button>
                    </form>
                  </div>
                </div>
                <div class="mt-4 database">
                  <table class="database-table">
                    <thead class="sticky-top">
                      <tr>
                        <th>ID</th>
                        <th>Date Paid</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>DateRegister</th>
                        <th>Update</th>
                      </tr>
                    </thead>

                    <?php

                    include('db.php');
                    if (isset($_POST['searchCustomer'])) {
                      $searchData = $_POST['searchData'];
                      $result = mysqli_query($con, "SELECT * FROM client WHERE ID LIKE '%$searchData%' or firstname LIKE '%$searchData%' or lastname LIKE '%$searchData%' or datePaid LIKE '%$searchData%'  ORDER BY datePaid DESC");
                    } else {
                      $result = mysqli_query($con, 'SELECT * FROM client ORDER BY datePaid DESC');
                    }

                    while ($row = mysqli_fetch_array($result)) { ?>
                      <!-- <tr id="<?php echo $row['id']; ?>"> -->
                      <tr>
                        <td data-target="ID"><?php echo $row['ID']; ?></td>
                        <td data-target="datePaid"><?php echo $row['datePaid']; ?></td>
                        <td data-target="firstname"><?php echo $row['firstname']; ?></td>
                        <td data-target="lastname"><?php echo $row['lastname']; ?></td>
                        <td data-target="age"><?php echo $row['age']; ?></td>
                        <td data-target="contact"><?php echo $row['contact']; ?></td>
                        <td data-target="address"><?php echo $row['address']; ?></td>
                        <td data-target="dateRegistered"><?php echo $row['dateRegistered']; ?></td>
                        <td> <a href="#" data-role="update" data-id="<?php echo $row['ID']; ?>"><i class="fa-solid fa-user-pen" style="color: #5156ed; background-color: white; padding: 7px; border-radius: 5px"></i></a></td>
                      </tr>
                    <?php
                    }

                    $con->close();
                    ?>
                  </table>
                </div>
              </div>

              <!-- Modal Update Customer -->
              <div class="updateForm">
                <div class="modal" id="myModal">
                  <div class="modal-dialog modal-sm">
                    <!-- modal content -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title mx-auto">Update Payment</h1>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                      </div>

                      <div class="modal-body">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" id="datePaid">
                        <input type="hidden" id="userId" class="form-control">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-bs-dismiss="modal">Close</button>
                        <a href="#" id="save" class="btn btn-pri pull-right">Update</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--Insert Customer-->
              <div class="insertClient">
                <div class="modal" id="mymodel">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="headingAddClient mx-auto">Register</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>

                      <div class="modal-body">
                        <form action="walkin.php" method="post">
                          <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter Firstname" name="firstname" autocomplete="off" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" autocomplete="off" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" placeholder="Age" name="age" autocomplete="off" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" class="form-control" placeholder="0987-654-3210" name="contact" autocomplete="off" required>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Enter Address" name="address" autocomplete="off" required>
                          </div>
                          <div class="modal-footer mb-3">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" onclick="add" name="addCustomer" class="btn btn-pri"> Submit</button>
                          </div>
                        </form>
                        <?php
                        function add($firstname, $lastname, $age, $contact, $address)
                        {
                          include('db.php');
                          $sql = "INSERT INTO client (firstname, lastname, age, contact, address)
                                                        VALUES ('$firstname','$lastname', '$age', '$contact', '$address')";
                          $result = $con->query($sql);

                          if ($result == TRUE) {
                            echo '<script> swal("Successfully Recorded", "", "success").then(function()
                                                            {
                                                            window.location = "walkin.php";
                                                                }); </script>';
                          } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                          }
                          $con->close();
                        }

                        if (isset($_POST['addCustomer'])) {
                          echo add(
                            $_POST['firstname'],
                            $_POST['lastname'],
                            $_POST['age'],
                            $_POST['contact'],
                            $_POST['address'],
                          );
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    //append values on input fields
    $(document).ready(function() {
      $(document).on('click', 'a[data-role=update]', function() {
        var id = $(this).data('id');
        var datePaid = $('#' + id).children('td[data-target=datePaid]').text();

        $('#datePaid').val(datePaid);
        $('#userId').val(id);
        $('#myModal').modal('toggle');

      })

      //now create event to get data from fields and updat in database

      $('#save').click(function() {
        var id = $('#userId').val();
        var datePaid = $('#datePaid').val();


        $.ajax({
          url: 'dbEdit.php',
          method: 'post',
          data: {
            datePaid: datePaid,
            id: id
          },
          success: function(response) {
            // now update user record in table
            $('#' + id).children('td[data-target=datePaid]').text(datePaid);
            $('#myModal').modal('toggle');
          }
        });

      });
    });
  </script>
</body>

</html>