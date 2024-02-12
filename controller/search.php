<?php
    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/search.php';

    $searched_product = $_GET['searched_product'];
    $results = searchProduct($searched_product);
    require __DIR__.'/../view/search.php';
?>