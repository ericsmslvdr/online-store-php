<table width="100%" border="1" cellspacing="1" cellpadding="6" id="table-cart">
    <tr>
        <th width="18%" bgcolor="#a9a9a9">Product</th>
        <th width="45%" bgcolor="#a9a9a9">Product Description</th>
        <th width="10%" bgcolor="#a9a9a9">Unit Price</th>
        <th width="9%" bgcolor="#a9a9a9">Quantity</th>
        <th width="9%" bgcolor="#a9a9a9">Total</th>
        <th width="9%" bgcolor="#a9a9a9">Remove</th>
    </tr>

    <?= $cartOutput; ?>

    <!-- <tr>
            <td colspan="6">&nbsp;</td>
        </tr> -->
</table>

<?= $cartTotal; ?>

<br>

<?= $emptyCart; ?>

<br>