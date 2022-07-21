<?php
include_once('../scripts/product-details.php');
?>

<html>

<head>
    <title><?php echo $product_name; ?></title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <?php include_once('./includes/header.php'); ?>

    <div class="container">
        <div class="product-section">
            <?php include_once('./includes/product-content.php'); ?>
        </div>
    </div>

    <?php include_once('./includes/footer.php'); ?>
</body>

</html>