<?php
if (isset($_POST['addBtn'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = mysqli_query($con, "INSERT INTO admin (username, password, last_log_date)
                                VALUES ('$username', '$password', now())");
    header("location: ./admin-page.php#formAdmin");
    exit();
}
