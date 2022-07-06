<?php
include_once('../controllers/adminLoginController.php')
?>

<html>

<head>
    <title>Admin Log In </title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./includes/templateHeader.php"); ?>

        <div id="pageContent" class="fixed">
            <?php include_once('./includes/adminLoginContent.php') ?>
        </div>

        <?php include_once("./includes/templateFooter.php"); ?>
    </div>
</body>

</html>