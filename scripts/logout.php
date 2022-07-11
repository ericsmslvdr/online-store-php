<?php
session_start();
unset($_SESSION['manager']);

// if (isset($_SESSION['manager'])) {
//     session_unset();
header('location: ../views/admin-login.php');
exit();
// }

