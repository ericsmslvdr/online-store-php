<?php
$isUpdate = false;
$username = "";
$password = "";

if (isset($_POST['updateBtn'])) {
    $isUpdate = true;
    $admin_id_tmp = $_POST['adminID'];
    $username = $_POST['userUpd'];
    $password = $_POST['passUpd'];
}
if (isset($_POST['updateBtnConfirm']) && isset($_POST['username'])) {
    $admin_id = $_POST['updateIDConfirm'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "UPDATE admin 
                                SET username = '$username', password = '$password'
                                WHERE id = $admin_id");
    $isUpdate = false;
    header("location: ./admin-page.php#formAdmin");
    exit();
}
if (isset($_POST['cancelBtn'])) {
    $isUpdate = false;
    header("location: ./admin-page.php#formAdmin");
    exit();
}
