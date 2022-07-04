<?php
require('../models/connect.php');

$adminlist = "";
$isUpdate = false;
$username = "";
$password = "";

// READ
$sql = mysqli_query($con, "SELECT id, username, password, last_log_date 
                            FROM admin");
if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $usernameTbl = $row['username'];
        $passwordTbl = $row['password'];
        $admin_id_tbl = $row['id'];
        $last_log_date = $row['last_log_date'];

        $adminlist .=   '<tr>
                            <td>
                            ' . $admin_id_tbl . '
                            </td>
    
                            <td>
                            ' . $usernameTbl . '
                            </td>
    
                            <td>
                            ' . $passwordTbl . '
                            </td>
                            
                            <td>
                            ' . $last_log_date . '
                            </td>
    
                            <td style="margin-top: 15px;">
                                <form method="post" class="formBtn" action="./adminPage.php#formAdmin">
                                    <input type="submit" name="updateBtn" class="pointer button update" value="Update">
                                    <input type="submit" name="delBtn" class="pointer button delete" value="Delete">
                                    
                                    <input type="hidden" name="adminID" value="' . $admin_id_tbl . '">
                                    <input type="hidden" name="userUpd" value="' . $usernameTbl . '">
                                    <input type="hidden" name="passUpd" value="' . $passwordTbl . '">
                                </form>
                            </td>
                        </tr>';
    }
} else {
    $adminlist = '<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="29.2%">&nbsp;</td>
                  </tr>';
}

// DELETE
if (isset($_POST['delBtn'])) {
    $admin_id = $_POST['adminID'];

    $sql = mysqli_query($con, "DELETE FROM admin 
                                WHERE id = $admin_id");
    header("location: ./adminPage.php#tableAdmin");
    exit();
}

// CREATE
if (isset($_POST['addBtn'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = mysqli_query($con, "INSERT INTO admin (username, password, last_log_date)
                                VALUES ('$username', '$password', now())");
    header("location: ./adminPage.php#formAdmin");
    exit();
}

// UPDATE
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
    header("location: ./adminPage.php#formAdmin");
    exit();
}
if (isset($_POST['cancelBtn'])) {
    $isUpdate = false;
    header("location: ./adminPage.php#formAdmin");
    exit();
}