<?php
echo '<div style="margin: 24px; text-align: left;">
        <table width="100%" border="1" cellspacing="1" cellpadding="6" id="tableCart">
            <tr>
                <th width="18%" bgcolor="#a9a9a9">Product</th>
                <th width="45%" bgcolor="#a9a9a9">Product Description</th>
                <th width="10%" bgcolor="#a9a9a9">Unit Price</th>
                <th width="9%" bgcolor="#a9a9a9">Quantity</th>
                <th width="9%" bgcolor="#a9a9a9">Total</th>
                <th width="9%" bgcolor="#a9a9a9">Remove</th>
            </tr>

            ' . $cartOutput . '

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>

        ' . $cartTotal . '

        <br>
        <a href="cart.php?cmd=emptycart">Click Here to Empty Your Shopping Cart</a>
    </div>
    <br>';