<?php
session_start();
if (!isset($_SESSION['manager'])) {
    header("location: /OnlineStorePHP/views/adminLogin.php");
    exit();
}

require('../config/connect.php');

include_once('../scripts/manageAdmin/readAdmins.php');
include_once('../scripts/manageAdmin/createAdmin.php');
include_once('../scripts/manageAdmin/deleteAdmin.php');
include_once('../scripts/manageAdmin/updateAdmin.php');

