<?php
include_once('./scripts/show-products.php');
?>

<html>

<head>
    <title>Store Home Page</title>
    <link rel="stylesheet" href="./views/css/styles.css">
</head>

<body>
    <?php include_once("./views/includes/header.php"); ?>

    <div class="container">
        <div class="home-section">
            <?php include_once('./views/includes/index-content.php'); ?>
        </div>
    </div>
    
    <?php include_once("./views/includes/footer.php"); ?>
</body>

</html>