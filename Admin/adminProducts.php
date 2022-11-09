<?php
include 'db.php';

if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_discount = $_POST['p_discount'];
    $p_image = $_FILES['p_image']['name'];
    $p_avail = $_POST['p_avail'];
    $p_expi = $_POST['p_expi'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = '../uploaded_product/' . $p_image;

    $p_fprice = $p_price * $p_discount / 100;
    $p_finalprice = $p_price - $p_fprice;

    $insert_query = mysqli_query($con, "INSERT INTO `products`(prod_name, price, prod_avail, prod_expi, discount, fprice, finalprice, image) VALUES('$p_name', '$p_price','$p_avail', '$p_expi', '$p_discount', '$p_fprice',  '$p_finalprice', '$p_image')") or die('query failed');

    if ($insert_query) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'product add succesfully';
    } else {
        $message[] = 'could not add the product';
    }
};


if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($con, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
    if ($delete_query) {
        header('location:adminProducts.php');
        $message[] = 'product has been deleted';
    } else {
        header('location:adminProducts.php');
        $message[] = 'product could not be deleted';
    };
};


if (isset($_POST['update_product'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_avail = $_POST['update_p_avail'];
    $update_p_expi = $_POST['update_p_expi'];
    $update_p_discount = $_POST['update_p_discount'];

    $update_p_fprice = $update_p_price * $update_p_discount / 100;
    $update_p_finalprice = $update_p_price - $update_p_fprice;

    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = '../uploaded_product/' . $update_p_image;

    $update_query = mysqli_query($con, "UPDATE `products` SET prod_name = '$update_p_name', price = '$update_p_price', discount= '$update_p_discount', fprice = '$update_p_fprice', finalprice = '$update_p_finalprice', prod_avail= '$update_p_avail', prod_expi= '$update_p_expi', image = '$update_p_image' WHERE id = '$update_p_id'");


    if ($update_query) {
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
        $message[] = 'product updated succesfully';
        header('location:adminProducts.php');
    } else {
        $message[] = 'product could not be updated';
        header('location:adminProducts.php');
    }
}
?>

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

    <title>Admin Products</title>

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

    .modal .modal-footer {
        height: 100%;
    }

    .edit-form-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1100;
        background-color: var(--dark-bg);
        display: none;
        align-items: center;
        justify-content: center;
        min-height: 75vh;
        width: 100%;
    }

    .edit-form-container form {
        width: 32%;
        height: 20%;
        border-radius: .5rem;
        background-color: white;
        text-align: left;
    }

    .edit-form-container .form-label {
        position: absolute;
        margin-left: 2%;
    }

    .edit-form-container .form-control {
        width: 65%;
        margin-left: 28%;
        margin-bottom: 2%;
    }

    .edit-form-container .modal-header {
        background-image: linear-gradient(to right, #fb974f, #f5ab76);
        font-family: 'Playfair Display SC', serif;
        margin-bottom: 20px;
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
                        <li class="nav-item">
                            <div class="content-nav">
                                <a href="pinOrder.php" class="nav-link align-middle px-0 ps-xl-2">
                                    <i class="fa-solid fa-cart-shopping"></i><span class="ms-3 d-none d-sm-inline">Order&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="content-nav" style="background-color: rgba(115, 115, 115, 0.56);border-radius: 5px;">
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
                                        <a href="adminProducts.php" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-arrow-rotate-right" style="font-size:15px;"></i> Refresh</span></a>
                                    </li>
                                </div>
                                <div class="content-nav m-3">
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal" class="nav-link px-0 ps-xl-2"> <span class="d-none d-sm-inline"><i class="fa-solid fa-user-plus" style="font-size:12px;"></i> Insert Product</span></a>
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
                                        <h1 style="font-size:30px">Inventory of the Products</h1>
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
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Discount %</th>
                                                <th>Final Price</th>
                                                <th>Qty</th>
                                                <th>Exp. Date</th>
                                                <th>
                                                    <i class="fa-solid fa-trash" style='color:#f54242; padding: 7px; border-radius: 5px'></i>
                                                </th>
                                                <th><i class="fa-solid fa-pen-to-square" style="color: #5156ed; padding: 7px; border-radius: 5px"></i></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php

                                            include 'db.php';

                                            if (isset($_POST['searchCustomer'])) {
                                                $searchData = $_POST['searchData'];
                                                $select_products = mysqli_query($con, "SELECT * FROM products WHERE prod_name LIKE '%$searchData%' or prod_expi LIKE '%$searchData%' ORDER BY id DESC");
                                            } else {

                                                $select_products = mysqli_query($con, "SELECT * FROM `products`");
                                            }
                                            while ($row = mysqli_fetch_assoc($select_products)) {
                                            ?>

                                                <tr>
                                                    <td><img src="../uploaded_product/<?php echo $row['image']; ?>" height="100" alt="">
                                                    </td>
                                                    <td><?php echo $row['prod_name']; ?></td>
                                                    <td>₱<?php echo $row['price']; ?>.00</td>
                                                    <td><?php echo $row['discount']; ?>%</td>
                                                    <td>₱<?php echo $row['finalprice']; ?>.00</td>
                                                    <td><?php if (empty($row['prod_avail'])) {
                                                            echo "Sold out";
                                                        } else {
                                                            echo $row['prod_avail'];
                                                        } ?></td>
                                                    <td><?php echo $row['prod_expi']; ?></td>
                                                    <td><a href="adminProducts.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');">
                                                            <i class='fa-solid fa-trash' style='color:#f54242; background-color: white; padding: 7px; border-radius: 5px'></i></a></td>
                                                    <td><a href="adminProducts.php?edit=<?php echo $row['id']; ?>">
                                                            <i class="fa-solid fa-pen-to-square" style="color: #5156ed; background-color: white; padding: 7px; border-radius: 5px"></i></a>
                                                    </td>
                                                </tr>

                                            <?php
                                            }

                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--Insert product-->
                        <div class="insertClient">
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="mx-auto">Add Product</h3>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="modal-body">
                                            <form action="adminProducts.php" method="post" class="add-product-form" enctype="multipart/form-data">
                                                <div class="mt-3">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text" class="form-control" name="p_name" placeholder="Enter product name" required>
                                                </div>
                                                <div class="mt-3">
                                                    <label class="form-label">Price</label>
                                                    <input type="number" class="form-control" name="p_price" min="0" placeholder="Enter price" required>
                                                </div>
                                                <div class="mt-3">
                                                    <label class="form-label">Discount %</label>
                                                    <input type="number" class="form-control" name="p_discount" min="0" placeholder="Enter discount (0 - 100 %)" required>
                                                </div>
                                                <div class="mt-3">
                                                    <label class="form-label">Availability</label>
                                                    <input type="text" class="form-control" name="p_avail" placeholder="Enter availability" required>
                                                </div>
                                                <div class="mt-3">
                                                    <label class="form-label">Exp. Date</label>
                                                    <input type="date" class="form-control" name="p_expi" placeholder="Enter expiration date" required>
                                                </div>
                                                <div class="mt-3">
                                                    <label class="form-label">Image</label>
                                                    <input type="file" class="form-control" name="p_image" accept="image/png, image/jpg, image/jpeg, image/jfif" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                    <input type="submit" value="Update" name="add_product" class="btn btn-pri">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="edit-form-container">

                            <?php

                            if (isset($_GET['edit'])) {
                                $edit_id = $_GET['edit'];
                                $edit_query = mysqli_query($con, "SELECT * FROM `products` WHERE id = $edit_id");
                                if (mysqli_num_rows($edit_query) > 0) {
                                    while ($fetch_edit = mysqli_fetch_assoc($edit_query)) {
                            ?>


                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h3 class="mx-auto" style="font-size: 30px;">Update Product</h3>
                                                <a href="adminProducts.php" class="close">&times;</a>

                                            </div>
                                            <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">

                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" required name="update_p_name" value="<?php echo $fetch_edit['prod_name']; ?>">

                                            <label class="form-label">Price</label>
                                            <input type="number" min="0" class="form-control" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">

                                            <label class="form-label">Discount %</label>
                                            <input type="number" min="0" class="form-control" name="update_p_discount" value="<?php echo $fetch_edit['discount']; ?>">

                                            <label class="form-label">Availability</label>
                                            <input type="text" class="form-control" required name="update_p_avail" value="<?php echo $fetch_edit['prod_avail']; ?>">

                                            <label class="form-label">Exp. Date</label>
                                            <input type="date" class="form-control" required name="update_p_expi" value="<?php echo $fetch_edit['prod_expi']; ?>">

                                            <label class="form-label">Image</label>
                                            <input type="file" class="form-control" required name="update_p_image" accept="image/png, image/jpg, image/jpeg, image/jfif">
                                            <div class="modal-footer">
                                                <a href="adminProducts.php" class="btn btn-default"> Cancel </a>
                                                <input type="submit" value="Update" name="update_product" class="btn btn-pri" style="margin-right:20px">
                                            </div>
                                        </form>
                            <?php
                                    }
                                }
                                echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
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