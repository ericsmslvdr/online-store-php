<?php
session_start();
require('../scripts/database.php');

if (!isset($_SESSION['manager'])) {
    header("location: admin-login.php");
    exit();
}

if (isset($_POST['product-name'])) {
    $productName = mysqli_real_escape_string($con, $_POST['product-name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $category = mysqli_real_escape_string($con, $_POST['category']);
    $subCategory = mysqli_real_escape_string($con, $_POST['subCategory']);
    $details = mysqli_real_escape_string($con, $_POST['details']);

    $sql = mysqli_query($con, "INSERT INTO products (product_name, price, details, category, subcategory, date_added)
                                VALUES ('$productName', '$price', '$details', '$category', '$subCategory', now())");

    $pid = mysqli_insert_id($con);
    $newName = "$pid.jpg";
    move_uploaded_file($_FILES['fileField']['tmp_name'], "../inventory-images/$newName");
    header("location: inventory-list.php");
    exit();
}
