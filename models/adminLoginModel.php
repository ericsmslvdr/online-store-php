<?php
require('../models/connect.php');
$sql = mysqli_query($con, "SELECT id 
                            FROM admin 
                            WHERE username = '$manager'
                            AND password = '$password' 
                            LIMIT 1");

$existCount = mysqli_num_rows($sql);
if ($existCount == 1) {
    while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
    }
    $_SESSION['id'] = $id;
    $_SESSION['manager'] = $manager;
    $_SESSION['password'] = $password;
    header("location: inventoryList.php");
    exit();
} else {
    $show = 'That information is incorrect, <a href = "adminLogin.php">try again</a>';
}
