<?php
include_once('./scripts/show-products.php');
?>

<html>

<head>
    <title>Store Home Page</title>
    <link rel="stylesheet" href="./views/css/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./views/includes/header.php"); ?>

        <div id="pageContent">
            <?php include_once('./views/includes/index-content.php'); ?>
        </div>

        <?php include_once("./views/includes/footer.php"); ?>
    </div>
</body>

</html>