<div id="pageHeader">
    <table width="100%" border="0" cellspacing="0" cellpadding="12">
        <tr>
            <td width="32%">
                <a href="/online-store-php/index.php">
                    <img src="/online-store-php/views/img/online-store-logo.jpg" alt="Logo" width="260" height="70" border="0">
                </a>
            </td>
            <td width="58%" align="right">&nbsp;</td>
            <td>
                <a href="/online-store-php/views/cart.php">Your Cart</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="/online-store-php/index.php">Home</a>
                &nbsp; &middot; &nbsp; <a href="/online-store-php/views/inventory-list.php">Products</a>
                &nbsp; &middot; &nbsp; <a href="#">Help</a>
                &nbsp; &middot; &nbsp; <a href="#">Contact</a>
            </td>
            <td>
                <?php
                if (isset($_SESSION['manager'])) {
                    echo '<a href="/online-store-php/scripts/logout.php">Logout</a>';
                }
                ?>
            </td>
        </tr>
    </table>
</div>