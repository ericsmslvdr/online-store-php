<?php
session_start();
if (!isset($_SESSION['manager'])) {
    header("location: adminLogin.php");
    exit();
}

include_once('../models/inventoryListModel.php');