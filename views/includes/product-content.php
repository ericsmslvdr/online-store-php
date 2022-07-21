<div class="prod-img">
    <img src="../inventory-images/<?= $id; ?>.jpg" alt="<?= $product_name; ?>">
</div>
<div class="details">
    <div class="info">
        <?php
        echo '<h3>' . $product_name . '</h3>
                ' . $subcategory . ' ' . $category . '
                <br><br>
                ' . $details . '
                <br><br>
                ₱' . $price . '';
        ?>
    </div>
    <div class="addToCart">
        <form method="post" action="cart.php">
            <input type="hidden" name="pid" id="pid" value="<?= $id; ?>">
            <input type="submit" name="button" class="pointer button cancel" value="Add to Cart">
        </form>
    </div>
</div>