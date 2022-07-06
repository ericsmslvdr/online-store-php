<?php
require('../models/connect.php');

$id = preg_replace('#[^0-9]#i', '', $_GET['id']);

$sql = mysqli_query($con, "SELECT * 
                            FROM products
                            WHERE id = '$id'
                            LIMIT 1");

$productCount = mysqli_num_rows($sql);;

if ($productCount > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $product_name = $row['product_name'];
        $price = $row['price'];
        $details = $row['details'];
        $category = $row['category'];
        $subcategory = $row['subcategory'];
    }
} else {
    echo "That item does not exist.";
    exit();
}
mysqli_close($con);
