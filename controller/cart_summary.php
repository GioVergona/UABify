<?php

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/products_list.php';

// Check if cart data is available in the session
$cartData = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

require __DIR__.'/../view/cart_summary.php';



?>
