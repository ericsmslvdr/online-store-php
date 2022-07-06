<?php
require('./config/connect.php');

$dynamicList = "";

$sql = mysqli_query($con, "SELECT * FROM products
                          ORDER BY date_added");
$productCount = mysqli_num_rows($sql); //count the number of records

if ($productCount > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $id = $row['id'];
        $product_name = $row['product_name'];
        $price = $row['price'];
        $date_added = $row['date_added'];

        $dynamicList .= '<table width="100%" border="0" cellpadding="6">
                            <tr>
                                <td width="17%" valign="top">
                                    <a href="./views/product.php?id= ' . $id . '"><img src="./inventoryImages/' . $id . '.jpg" alt="' . $product_name . '" width="75" height="100" border="1"></a>
                                </td>
                            
                                <td width="83%" valign="top">
                                    ' . $product_name . '
                                    <br>
                                    ₱' . $price . '
                                    <br>
                                    <a href="./views/product.php?id=' . $id . '">View product details</a>
                                </td>
                            </tr>
                        </table>';
    }
} else {
    $dynamicList = "We have no products listed in our store yet";
}

mysqli_close($con);
