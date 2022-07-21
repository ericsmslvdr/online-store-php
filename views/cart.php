<?php
require('../scripts/cart-script.php')
?>

<html>

<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <?php include_once('./includes/header.php'); ?>

    <div class="container">
        <div class="cart-section">
            <?php include_once('./includes/cart-content.php'); ?>
        </div>
    </div>

    <?php include_once('./includes/footer.php'); ?>
</body>

</html>