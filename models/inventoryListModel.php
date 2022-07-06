<?php
require('../models/connect.php');

if (isset($_POST['productName'])) {
    $productName = mysqli_real_escape_string($con, $_POST['productName']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $subCategory = mysqli_real_escape_string($con, $_POST['subCategory']);
    $details = mysqli_real_escape_string($con, $_POST['details']);

    $sql = mysqli_query($con, "INSERT INTO products (product_name, price, details, category, subcategory, date_added)
                                VALUES ('$productName', '$price', '$details', '$category', '$subCategory', now())");

    $pid = mysqli_insert_id($con);
    $newName = "$pid.jpg";
    move_uploaded_file($_FILES['fileField']['tmp_name'], "../inventoryImages/$newName");
    header("location: inventoryList.php");
    exit();
}
