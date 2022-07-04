<?php
echo '<br>
    <div align="left" style="margin-left:24px;">
        <h2>Please Log In To Manage the Store</h2>
        <form id="form1" name="form1" method="post" action="./adminLogin.php">
            <table cellpadding="5">
                <tr>
                    <td>
                        <label>User Name:</label>
                        <br>
                        <input name="frmUsername" type="text" size="40" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                        <br>
                        <input name="frmPassword" type="password" size="40" class="input" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        ' . $show . '
                    </td>
                </tr>
            </table>
        </form>
    </div>';
