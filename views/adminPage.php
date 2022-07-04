<?php
include_once('../controllers/adminPageController.php');
?>

<html>

<head>
    <title>Manage Admin Accounts</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once('./includes/templateHeader.php'); ?>

        <div id="pageContent">
            <?php include_once('./includes/adminPagePageContent.php'); ?>
        </div>

        <?php include_once('./includes/templateFooter.php'); ?>
    </div>
</body>

</html>