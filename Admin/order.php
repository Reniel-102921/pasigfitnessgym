<!DOCTYPE html>
<html lang="en" dir="ltr">

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
  <script src="sessionTimeout_dashboard.js"></script>

  <title>Order</title>

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

  .database {
    width: 100%;
    overflow: auto;
    height: 75%;
    border: 1px solid black;
    border-radius: 10px;
  }

  .viewOrders {
    padding-left: 20px;
    background-color: #2e2e2e;
    border-radius: 10px;
    font-family: 'Adamina', serif;
    width: 400px;
    height: 460px;
    padding-top: 20px;
  }

  .viewTableOrder {
    color: white;
    background-color: #2e2e2e;
    width: 350px;
    border-radius: 10px;
    height: 50%;
  }

  .viewTableOrder tr {
    width: 70px;
    height: 30px;
  }

  .viewTableOrder th {
    font-family: 'Martel Sans', sans-serif;
    font-size: 15px;
  }

  .modal .modal-footer {
    height: 100%;
  }


  .imgResize img:hover {
    height: auto;
    width: 200px;
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
              <div class="content-nav">
                <a href="pinWalkin.php" class="nav-link align-middle px-0 ps-xl-2">
                  <i class="fa-solid fa-users" style="padding-left: 6px;padding-right: 6px;"></i><span class="ms-3 d-none d-sm-inline">Walkin &emsp;&emsp;&emsp;&emsp;</span>
                </a>
              </div>
            </li>
            <li class="nav-item" style="background-color: rgba(115, 115, 115, 0.56);border-radius: 5px;">
              <div class="content-nav">
                <a href="order.php" class="nav-link align-middle px-0 ps-xl-2">
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
                    <a href="order.php" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-arrow-rotate-right" style="font-size:15px;"></i> Refresh</span></a>
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
                    <h1 style="font-size:30px">Customer's Order</h1>
                  </div>
                  <div class="col-6 search text-end position: relative;">
                    <form method="post">
                      <input id="inputSearch" type="text" placeholder="Search" name="searchData" autocomplete="off">
                      <button id="searchBtn" class="btn" type="submit" name="searchCustomer">Search</button>
                    </form>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7">
                    <div class="mt-4 database">
                      <table class="database-table">
                        <thead class="sticky-top">
                          <tr>
                            <th>ID</th>
                            <th>Date Order</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Received</th>
                            <th>Update</th>
                          </tr>
                        </thead>
                        <?php

                        include('db.php');
                        if (isset($_POST['searchCustomer'])) {
                          $searchData = $_POST['searchData'];
                          $result = mysqli_query($con, "SELECT * FROM orders WHERE id LIKE '%$searchData%' or cust_name LIKE '%$searchData%' or dateOrder LIKE '%$searchData%' or method LIKE '%$searchData%' or dateReceived LIKE '%$searchData%' ORDER BY dateReceived ASC");
                        } else {
                          $result = mysqli_query($con, 'SELECT * FROM orders ORDER BY dateReceived ASC');
                        }

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                          <tr>
                            <td data-target="id"><?php echo $row['id']; ?></td>
                            <td data-target="dateOrder"><?php echo $row['dateOrder']; ?></td>
                            <td> <a href="order.php?orderName=<?php echo $row['email'] ?>"> <?php echo $row['cust_name']; ?> </a></td>
                            <td data-target="cust_number"><?php echo $row['cust_number']; ?></td>
                            <?php
                            if ($row['dateReceived'] > 0) {
                              echo "<td>Received</td>";
                            } else {
                              echo "<td>Pending</td>";
                            }
                            ?>
                            <td> <a href="#" data-role="update" data-id="<?php echo $row['id']; ?>"><i class="fa-solid fa-user-pen" style="color: #5156ed; background-color: white; padding: 7px; border-radius: 5px"></i></a></td>
                          </tr>
                        <?php
                        }

                        $con->close();
                        ?>
                      </table>
                    </div>

                  </div>
                  <div class="col-lg-5 mt-4 ms-4 viewOrders">
                    <!-- view order -->
                    <table class="viewTableOrder">
                      <?php
                      include 'db.php';

                      if (isset($_GET['orderName'])) {
                        $orderName = $_GET['orderName'];

                        $sql = mysqli_query($con, "SELECT orders.cust_name, orders.method, orders.proof, customers.reference, orders.order_item, orders.order_qty, orders.total_price FROM orders LEFT JOIN customers on customers.email = orders.email WHERE orders.email = '$orderName'");
                        if (mysqli_num_rows($sql) > 0) {
                          while ($row = mysqli_fetch_assoc($sql)) {
                      ?>
                            <tr>
                              <th style="text-align: center; height: 50px;" colspan="4">List of Orders</th>
                            </tr>
                            <tr>
                              <th>Name
                              <th>
                              <td><?php echo $row['cust_name']; ?> </td>
                            </tr>
                            <tr>
                              <th>Method
                              <th>
                              <td><?php echo $row['method']; ?></td>
                            </tr>
                            <tr>
                              <th>Reference No.
                              <th>
                              <td><?php echo $row['reference']; ?></td>
                            </tr>
                            <tr>
                              <th>Product/s
                              <th>
                              <td><?php echo $row['order_item']; ?></td>
                            </tr>
                            <tr>
                              <th>Qty
                              <th>
                              <td><?php echo $row['order_qty']; ?></td>
                            </tr>
                            <tr>
                              <th>Total Payment
                              <th>
                              <td><?php echo $row['total_price']; ?></td>
                            </tr>
                            <tr>
                              <td class="imgResize" style="text-align: center; padding-top:15px" colspan="3"><img src="../paymentproof/<?php
                                                                                                                                        echo $row['proof']; ?>" height="auto" width="70px" id="proofImg"></td>
                            </tr>
                      <?php
                          }
                        }
                      } else {
                        echo "<tr>
                                                            <th style='text-align: center;' colspan='3'>List of Orders</th>
                                                        </tr>";
                      } ?>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Modal Update customer -->
              <div class="updateForm">
                <div class="modal" id="myModal">
                  <div class="modal-dialog modal-sm">
                    <!-- modal content -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title mx-auto">Update Order</h1>
                        <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                      </div>

                      <div class="modal-body">

                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" id="dateReceived"><br>

                        <input type="hidden" id="userId" class="form-control">
                      </div>
                      <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-default pull-left" data-bs-dismiss="modal">Close</button>
                        <a href="#" id="save" class="btn btn-pri pull-right">Update</a>
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
</body>



<!-- update the date received of the customer -->
<script>
  //append values on input fields
  $(document).ready(function() {
    $(document).on('click', 'a[data-role=update]', function() {
      var id = $(this).data('id');
      var dateReceived = $('#' + id).children('td[data-target=dateReceived]').text();

      $('#dateReceived').val(dateReceived);
      $('#userId').val(id);
      $('#myModal').modal('toggle');

    })

    //now create event to get data from fields and updat in database

    $('#save').click(function() {
      var id = $('#userId').val();
      var dateReceived = $('#dateReceived').val();


      $.ajax({
        url: 'dbUpdate.php',
        method: 'post',
        data: {
          dateReceived: dateReceived,
          id: id
        },
        success: function(response) {
          // now update user record in table
          $('#' + id).children('td[data-target=dateReceived]').text(dateReceived);
          $('#myModal').modal('toggle');
        }
      });

    });
  });
</script>

</html>