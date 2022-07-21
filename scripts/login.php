<?php
session_start();
if (isset($_SESSION['manager'])) {
    header("location: inventory-list.php");
    exit();
}

require('../scripts/database.php');

$show = '<input type="submit" name="button" class="pointer button" value="Log In">';

if (isset($_POST['frm-username']) && isset($_POST['frm-password'])) {
    $manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['frm-username']);
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['frm-password']);

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
        header("location: inventory-list.php");
        exit();
    } else {
        $show = 'That information is incorrect, <a href = "admin-login.php">try again</a>';
    }
}
