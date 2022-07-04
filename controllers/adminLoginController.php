<?php
session_start();
if (isset($_SESSION['manager'])) {
    header("location: inventoryList.php");
    exit();
}

$show = '<input type="submit" name="button" class="pointer button" value="Log In">';

if (isset($_POST['frmUsername']) && isset($_POST['frmPassword'])) {
    $manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['frmUsername']);
    $password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST['frmPassword']);

    include_once('../models/adminLoginModel.php');
}
