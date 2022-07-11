<?php
require('../scripts/cart-script.php')
?>

<html>

<head>
    <title>Your Cart</title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once('./includes/header.php'); ?>

        <div id="pageContent">
            <?php include_once('./includes/cart-content.php'); ?>
        </div>

        <?php include_once('./includes/footer.php'); ?>
    </div>
</body>

</html>