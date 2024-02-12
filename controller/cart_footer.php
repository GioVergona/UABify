<?php

    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/products_list.php';
    $cartData = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    require __DIR__.'/../view/cart_footer.php';
?>