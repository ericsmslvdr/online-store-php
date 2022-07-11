<?php
session_start();
if (!isset($_SESSION['manager'])) {
    header("location: /online-store-php/views/admin-login.php");
    exit();
}

require('../scripts/database.php');

include_once('../scripts/manage-admin/read.php');
include_once('../scripts/manage-admin/create.php');
include_once('../scripts/manage-admin/delete.php');
include_once('../scripts/manage-admin/update.php');

