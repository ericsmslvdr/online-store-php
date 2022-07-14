<div align="left" style="margin-left:24px;">
    <h2>Manage Admin Accounts</h2>
</div>
<hr>
<br>
<table border="1" cellspacing="1" cellpadding="5" id="tableAdmin">
    <tr>
        <th bgcolor="#a9a9a9">ID</th>
        <th bgcolor="#a9a9a9">Username</th>
        <th bgcolor="#a9a9a9">Password</th>
        <th bgcolor="#a9a9a9">Last Log Date</th>
        <th bgcolor="#a9a9a9">Edit</th>
    </tr>
    <?= $adminList; ?>
</table>
<br><br>

<form method="post" id="formAdmin" action="./admin-page.php#formAdmin">
    <table cellpadding="5">
        <tr>
            <th>
                <?php
                if ($isUpdate) {
                    echo '<span>Update Admin ID ' . $admin_id_tmp . '</span>';
                } else {
                    echo '<span>Add New Admin Account</span>';
                }
                ?>
            </th>
        </tr>
        <tr>
            <td>
                <label>Username:</label>
                <br>
                <input name="username" type="text" size="20" class="input" value="<?= $username; ?>" placeholder="Enter Username Here" required>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password:</label>
                <br>
                <input name="password" type="text" size="20" class="input" value="<?= $password; ?>" placeholder="Enter Password Here" required>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if ($isUpdate) {
                    echo '<input type="submit" name="cancelBtn" class="pointer button" value="Cancel">
                                <input type="submit" name="updateBtnConfirm" class="pointer button update" value="Update">
                                <input type="hidden" name="updateIDConfirm" value="' . $admin_id_tmp . '">';
                } else {
                    echo '<input type="submit" name="addBtn" class="pointer button create" value="Add Account">';
                }
                ?>
            </td>
        </tr>
    </table>
</form>
<br>