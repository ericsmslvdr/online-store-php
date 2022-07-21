<header>
    <nav class="nav-bar">
        <ul class="nav-left">
            <li>
                <a href="/online-store-php/index.php">
                    <img src="/online-store-php/views/img/online-store-logo.jpg" width="260" height="70">
                </a>
            </li>
            <li><a href="/online-store-php/index.php">Home</a></li>
            <li><a href="/online-store-php/views/inventory-list.php">Products</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav-right">
            <li>
                <?php
                if (isset($_SESSION['manager'])) {
                    echo '<a href="/online-store-php/scripts/logout.php">Logout</a>';
                }
                ?>
            </li>
            <li><a href="/online-store-php/views/cart.php">Your Cart</a></li>
        </ul>
    </nav>
</header>