<?php
session_start();
if (!isset($_SESSION['manager'])) {
    header("location: /OnlineStorePHP/views/adminLogin.php");
    exit();
}

include_once('../models/adminPageModel.php');