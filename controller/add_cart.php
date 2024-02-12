<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $productId = $_GET['productId'];
    $quantity = $_GET['quantity'];
    $price = $_GET['price'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (!isset($_SESSION['cart'][$productId])) {
        // If not, add it to the cart with the quantity
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
        $_SESSION['cart'][$productId]['price'] = $price;
        $response = 'Product added to the cart successfully';
    } else {
        // If the product is already in the cart, update the quantity
        $_SESSION['cart'][$productId]['quantity'] += $quantity;
        $response = 'Product quantity updated in the cart';
    }

} else {
    // If the request is not a GET request, display an error message
    $response = 'Invalid request';
}
echo $response;

?>