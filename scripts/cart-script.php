<?php
session_start();
require('../scripts/database.php');

//Section 1 (if user attempts to add something to the cart from the page)
if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    $wasFound = false;
    $i = 0;
    // If the cart session variable is not set or cart array is empty
    if (!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1) {
        // execute if the cart is empty or not set
        $_SESSION['cart_array'] = array(0 => array("item_id" => $pid, "quantity" => 1));
    } else {
        // execute if the cart has at least one item in it
        foreach ($_SESSION['cart_array'] as $each_item) {
            $i++;
            foreach ($each_item as $key => $value) {
                if ($key == "item_id" && $value == $pid) {
                    // That item is in cart already so let's adjust its quantity using array_splice()
                    array_splice($_SESSION['cart_array'], $i - 1, 1, array(array("item_id" => $pid, "quantity" => $each_item['quantity'] + 1)));
                    $wasFound = true;
                } // close if condition
            } // close for loop
        } // close foreach loop
        if ($wasFound == false) {
            array_push($_SESSION['cart_array'], array("item_id" => $pid, "quantity" => 1));
        }
    }
    header("location: ../index.php");
    exit();
}

// Section 2 (if user wants to remove item from the cart)
if (isset($_POST['index_to_remove']) && $_POST['index_to_remove'] != "") {
    // Access the array and run code to remove that array index
    $key_to_remove = $_POST['index_to_remove'];
    if (count($_SESSION['cart_array']) <= 1) {
        unset($_SESSION['cart_array']);
    } else {
        unset($_SESSION['cart_array'][$key_to_remove]);
        sort($_SESSION['cart_array']);
    }
    header("location: ./cart.php");
    exit();
}

// Section 3 (if user chooses to adjust item quantity)

if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
    $item_to_adjust = $_POST['item_to_adjust'];
    $quantity = $_POST['quantity'];
    $quantity = preg_replace('#[^0-9]#i', '', $quantity); // filter everything but numbers

    if ($quantity >= 100) {
        $quantity = 99;
    }
    if ($quantity < 1) {
        $quantity = 1;
    }
    if ($quantity == "") {
        $quantity = 1;
    }
    $i = 0;

    foreach ($_SESSION['cart_array'] as $each_item) {
        $i++;
        foreach ($each_item as $key => $value) {
            if ($key == "item_id" && $value == $item_to_adjust) {
                array_splice($_SESSION['cart_array'], $i - 1, 1, array(array("item_id" => $item_to_adjust, "quantity" => $quantity)));
            } //close the if
        } //close inner loop
    } //close foreach
    header("location: ./cart.php");
    exit();
} //close mother if



// Section 4 empty cart
if (isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
    unset($_SESSION['cart_array']);
}

//Section 5 (render the cart for the user to view the page)
$cartOutput = "";
$cartTotal = null;
$product_id_array = '';
$emptyCart = '';
if (!isset($_SESSION['cart_array']) || count($_SESSION['cart_array']) < 1) {
    $cartOutput = '<h2 align="center">
                    Your shopping cart is empty
                    </h2>
                    <tr>
                        <td colspan="6" align="center">Empty!!</td>
                    </tr>';
} else {
    // Start the For Each loop
    $i = 0;
    foreach ($_SESSION['cart_array'] as $each_item) {
        $itemID = $each_item['item_id'];
        $sql = mysqli_query($con, "SELECT * 
                                    FROM products 
                                    WHERE id='$itemID' 
                                    LIMIT 1");

        while ($row = mysqli_fetch_array($sql)) {
            $product_name = $row['product_name'];
            $price = $row['price'];
            $details = $row['details'];
        }

        $pricetotal = $price * $each_item['quantity'];
        $cartTotal += $pricetotal;
        setlocale(LC_MONETARY, "en_US");
        $pricetotal = number_format($pricetotal, 2);

        // Create the product array variable
        $product_id_array .= "$itemID-" . $each_item['quantity'] . ",";

        // Dynamic table row assembly
        $cartOutput .= '<tr>
                            <td style="text-align: center;">
                                <img src="../inventory-images/' . $itemID . '.jpg" alt="' . $product_name . '"height="150">
                                <br>
                                <a href="./product.php?id=' . $itemID . '">' . $product_name . '</a>
                                </td>
                            <td>
                                ' . $details . '
                            </td>
                            <td>
                            ₱' . $price . '
                            </td>
                            <td style="text-align: center;">
                                <form action="cart.php" method="post">
                                    <input name="quantity" type="text" class="input" value="' . $each_item['quantity'] . '"size="1" maxlength="2">
                                    <br>
                                    <input type="submit" class="pointer button" value="change">
                                    <input name="item_to_adjust" type="hidden" value="' . $itemID . '">
                                </form>
                            </td>
                            
                            <td>
                                ₱' . $pricetotal . '
                            </td>
                            
                            <td style="text-align: center;">
                                <form action="cart.php" method="post" style="margin: 0;">
                                    <input class="pointer button delete" type="submit" value="✕"> 
                                    <input name="index_to_remove" type="hidden" value="' . $i . '">
                                </form>
                            </td>
                        </tr>';
        $i++;
    }
    $emptyCart = '<a href="cart.php?cmd=emptycart">
                    <button class="pointer button delete">Empty Cart</button>
                </a>';
}
setlocale(LC_MONETARY, "en_PH");
$cartTotal = number_format($cartTotal, 2);
$cartTotal = '<div style="font-size:18px; margin-top:12px; text-align: right;">
    Cart Total: ₱ ' . $cartTotal . ' 
    </div>';
