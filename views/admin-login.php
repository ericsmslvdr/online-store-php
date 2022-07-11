<?php
include_once('../scripts/login.php')
?>

<html>

<head>
    <title>Admin Log In </title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <div align="center" id="mainWrapper">
        <?php include_once("./includes/header.php"); ?>

        <div id="pageContent" class="fixed">
            <?php include_once('./includes/admin-login-content.php') ?>
        </div>

        <?php include_once("./includes/footer.php"); ?>
    </div>
</body>

</html>