<?php

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/products_list.php';

$productId = $_GET['product_id'] ? (int) $_GET['product_id'] : 1;

$details = getDetailsByProduct($productId);
$title = $details['title'];

require_once __DIR__.'/../view/product_details.php';

?>