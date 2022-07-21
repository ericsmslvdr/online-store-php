<?php
include_once('../scripts/add-products.php');
?>

<html>

<head>
    <title>Inventory List</title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <?php include_once("./includes/header.php"); ?>

    <div class="container">
        <div class="inventory-section">
            <?php include_once('./includes/inventory-list-content.php') ?>
        </div>
    </div>

    <?php include_once("./includes/footer.php"); ?>
</body>

</html>