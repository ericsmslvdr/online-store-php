<?php
include_once('../scripts/login.php')
?>

<html>

<head>
    <title>Admin Log In </title>
    <link rel="stylesheet" href="../views/css/styles.css">
</head>

<body>
    <?php include_once("./includes/header.php"); ?>

    <div class="container">
        <div class="admin-login-section">
            <?php include_once('./includes/admin-login-content.php') ?>
        </div>
    </div>

    <?php include_once("./includes/footer.php"); ?>
</body>

</html>