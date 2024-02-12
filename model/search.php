<?php

function searchProduct($product){
    $conn = getConn();
    $params = ["%$product%"];
    $sql = "SELECT * FROM album WHERE title ILIKE $1";
    $response = pg_query_params($conn, $sql, $params);
    $result = pg_fetch_all($response);
    return $result;
}

?>