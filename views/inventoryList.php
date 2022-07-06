<?php
include_once('../controllers/inventoryListController.php');
?>

<html>

<head>
    <title>Inventory List</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./includes/templateHeader.php"); ?>

        <div id="pageContent">
            <?php include_once('./includes/inventoryListContent.php') ?>
        </div>

        <?php include_once("./includes/templateFooter.php"); ?>
    </div>
</body>

</html>