<table width="100%" border="0" cellspacing="0" cellpadding="15">
    <tr>
        <td width="19%" valign="top">
            <a href="../inventory-images/'. $id . '.jpg">
                <img src="../inventory-images/'. $id . '.jpg" width="142" height="188" alt="' . $product_name . '">
            </a>
        </td>
        <td width="81%" valign="top">
            <?php
            echo '<h3>' . $product_name . '</h3>
                    <p>
                        ₱' . $price . '
                        <br><br>
                        ' . $subcategory, $category . '
                        <br><br>
                        ' . $details . '
                        <br>
                    </p>';
            ?>
            <form id="form1" name="form1" method="post" action="cart.php">
                <input type="hidden" name="pid" id="pid" value="' . $id . '">
                <input type="submit" name="button" class="pointer button cancel" value="Add to Shopping Cart">
            </form>
        </td>
    </tr>
</table>