<?php
error_reporting(E_ALL);
$adminList = '';

$sql = mysqli_query($con, "SELECT id, username, password, last_log_date 
                            FROM admin");

if (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $usernameTbl = $row['username'];
        $passwordTbl = $row['password'];
        $adminIdTbl = $row['id'];
        $lastLogDate = $row['last_log_date'];

        $adminList .=   '<tr>
                            <td>
                            ' . $adminIdTbl . '
                            </td>
    
                            <td>
                            ' . $usernameTbl . '
                            </td>
    
                            <td>
                            ' . $passwordTbl . '
                            </td>
                            
                            <td>
                            ' . $lastLogDate . '
                            </td>
    
                            <td style="margin-top: 15px;">
                                <form method="post" class="formBtn" action="./admin-page.php#formAdmin">
                                    <input type="submit" name="updateBtn" class="pointer button update" value="Update">
                                    <input type="submit" name="delBtn" class="pointer button delete" value="Delete">
                                    
                                    <input type="hidden" name="adminID" value="' . $adminIdTbl . '">
                                    <input type="hidden" name="userUpd" value="' . $usernameTbl . '">
                                    <input type="hidden" name="passUpd" value="' . $passwordTbl . '">
                                </form>
                            </td>
                        </tr>';
    }
} else {
    $adminList = '<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td width="29.2%">&nbsp;</td>
                  </tr>';
}