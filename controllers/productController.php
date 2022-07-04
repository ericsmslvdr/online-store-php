<?php
if (isset($_GET['id'])) {
    include_once('../models/productModel.php');
} else {
    echo "Data to render this page is missing.";
    exit();
}

