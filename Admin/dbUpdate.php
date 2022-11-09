<?php
$con = mysqli_connect("localhost", "root", "", "pasigfitnessgym");

if (isset($_POST['dateReceived'])) {
    $dateReceived = $_POST['dateReceived'];
    $id = $_POST['id'];

    //query to update data

    $sql = mysqli_query($con, "UPDATE orders SET dateReceived='$dateReceived' WHERE id='$id'");
    if ($sql) {
        echo 'data update';
    }
}
