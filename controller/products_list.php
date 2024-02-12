<?php

require_once __DIR__.'/../model/connectDB.php';
require_once __DIR__.'/../model/categories.php';
require_once __DIR__.'/../model/products_list.php';

$categoryId = $_GET['category_id'] ? (int) $_GET['category_id'] : 1;

$category = getCategoryById($categoryId);
$products = getProductsByCategory($categoryId);

$title = $category['name'];

require_once __DIR__.'/../view/products_list.php';

?>