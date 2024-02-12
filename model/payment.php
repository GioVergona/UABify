<?php

function finishPayment($total_cost,$number_of_elements){
    $conn = getConn();
    $params=[$total_cost, $number_of_elements, $_SESSION['user_id']];
    $sql = "insert into purchase (date, total_cost, number_of_elements, user_id) values (CURRENT_DATE, $1, $2, $3) returning id";
    $results = pg_query_params($conn, $sql, $params); 
    if ($results) {
        $row = pg_fetch_assoc($results);
        $insertedId = $row['id'];
        return $insertedId;
    } else {
        return null; // Handle the case where the insertion fails
    }
}

function addOrderLine($name, $quantity, $price, $total_cost, $purchaseId, $productId){
    $conn = getConn();
    $params=[$name, $quantity, $price, $total_cost, $purchaseId, $productId];
    $sql = "insert into order_line (product_name, quantity, unit_cost, total_cost, order_id, product_id) values ($1, $2, $3, $4, $5, $6) returning id";
    $results = pg_query_params($conn, $sql, $params);
}

?>