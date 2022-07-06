<?php
include_once('./scripts/showProducts.php')
?>

<html>

<head>
    <title>Store Home Page</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./views/includes/templateHeader.php"); ?>

        <div id="pageContent">
            <?php include_once('./views/includes/indexContent.php'); ?>
        </div>

        <?php include_once("./views/includes/templateFooter.php"); ?>
    </div>
</body>

</html>