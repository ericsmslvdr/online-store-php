<div id="pageHeader">
    <table width="100%" border="0" cellspacing="0" cellpadding="12">
        <tr>
            <td width="32%">
                <a href="/OnlineStorePHP/index.php">
                    <img src="/OnlineStorePHP/styles/onlineStoreLogo.jpg" alt="Logo" width="260" height="70" border="0">
                </a>
            </td>
            <td width="58%" align="right">&nbsp;</td>
            <td>
                <a href="/OnlineStorePHP/views/cart.php">Your Cart</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="/OnlineStorePHP/index.php">Home</a>
                &nbsp; &middot; &nbsp; <a href="/OnlineStorePHP/views/inventoryList.php">Products</a>
                &nbsp; &middot; &nbsp; <a href="#">Help</a>
                &nbsp; &middot; &nbsp; <a href="#">Contact</a>
            </td>
            <td>
                <?php
                if (isset($_SESSION['manager'])) {
                    echo '<a href="/OnlineStorePHP/controllers/logoutController.php">Logout</a>';
                }
                ?>
            </td>
        </tr>
    </table>
</div>