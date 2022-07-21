<div class="login-title">
    <h2>Please Log In To Manage the Store</h2>
    <hr>
</div>
<div class="login-form" id="login-form">
    <form method="post" action="./admin-login.php">
        <table cellpadding="5">
            <tr>
                <td>
                    <label>User Name:</label>
                    <br>
                    <input name="frm-username" type="text" size="40" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password:</label>
                    <br>
                    <input name="frm-password" type="password" size="40" class="input" required>
                </td>
            </tr>
            <tr>
                <td>
                    <?= $show; ?>
                </td>
            </tr>
        </table>
    </form>
</div>