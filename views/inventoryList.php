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
            <div align="left" style="margin-left:24px;">
                <h2>Inventory list</h2>
            </div>
            <hr>
            <a name="inventoryForm" id="inventoryForm"></a>
            <h3>
                &darr; Add New Inventory Item Form &darr;
            </h3>
            <form action="inventoryList.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
                <table width="90%" border="0" cellspacing="0" cellpadding="6">

                    <tr>
                        <td width="20%" align="right">
                            Product Name
                        </td>
                        <td width="80%">
                            <label>
                                <input name="productName" type="text" class="input" size="64">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Product Price
                        </td>
                        <td>
                            <label>
                                ₱ <input name="price" type="text" class="input" size="12">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Category
                        </td>
                        <td>
                            <label>
                                <select name="category" id="category" class="input">
                                    <option value="Clothing">Electrical</option>
                                    <option value="Clothing">Machine parts</option>
                                </select>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Subcategory
                        </td>
                        <td>
                            <select name="subCategory" id="subCategory" class="input">
                                <option value=""></option>
                                <option value="Hats">Sample1</option>
                                <option value="Pants">Sample2</option>
                                <option value="Shirts">Sample3</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Product Details
                        </td>
                        <td>
                            <label>
                                <textarea name="details" id="details" cols="64" rows="5"></textarea>
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            Product Image
                        </td>
                        <td>
                            <label>
                                <input type="file" name="fileField" id="fileField">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            <label>
                                <input type="submit" name="button" class="pointer cancel button" value="Add This Item Now">
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <br>
        </div>

        <?php include_once("./includes/templateFooter.php"); ?>
    </div>
</body>

</html>