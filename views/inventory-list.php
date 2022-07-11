<?php
include_once('../scripts/add-products.php');
?>

<html>

<head>
    <title>Inventory List</title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./includes/header.php"); ?>

        <div id="pageContent">
            <?php include_once('./includes/inventory-list-content.php') ?>
        </div>

        <?php include_once("./includes/footer.php"); ?>
    </div>
</body>

</html>