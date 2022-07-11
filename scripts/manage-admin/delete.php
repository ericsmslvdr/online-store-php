<?php
if (isset($_POST['delBtn'])) {
    $admin_id = $_POST['adminID'];

    $sql = mysqli_query($con, "DELETE FROM admin 
                                WHERE id = $admin_id");
    header("location: ./admin-page.php#tableAdmin");
    exit();
}
