<?php

function getProductsByCategory(int $categoryId){
    $conn = getConn();
    $sql = "SELECT * FROM album WHERE category_id = $categoryId"; // Prepares the database query.
    $params = [];
    $results = pg_query_params($conn, $sql, $params); // Sends the query to DB.
    $products = pg_fetch_all($results); // Takes the query results.
    return $products;
}

function getDetailsByProduct(int $productId){
    $conn = getConn();
    $sql = "SELECT * FROM album WHERE id = $productId"; // Prepares the database query.
    $params = [];
    $results = pg_query_params($conn, $sql, $params); // Sends the query to DB.
    $details = pg_fetch_assoc($results); // Takes the query results.
    return $details;
}


?>