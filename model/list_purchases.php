<?php

    function getOrders($userId){
        $conn = getConn();
        $params = [$userId];
        $sql = "SELECT * FROM purchase WHERE user_id = $1";
        $results = pg_query_params($conn, $sql, $params);
        $orders = pg_fetch_all($results);
        return $orders;
    }

    function getOrdersLines($orders){
        $conn = getConn();
        $ids = [];
        foreach ($orders as $order) {
            $ids[] = $order['id'];
        }
        $paramString = implode(',', $ids);
        $params=[];
        $sql = "SELECT * FROM order_line WHERE order_id IN ($paramString)";
        $results = pg_query_params($conn, $sql, $params);
        $orders = pg_fetch_all($results);
        return $orders;
    }

    function getImage($productId){
        $conn = getConn();
        $params = [$productId];
        $sql = "SELECT id, cover FROM album WHERE id = $1";
        $results = pg_query_params($conn, $sql, $params);
        $image = pg_fetch_assoc($results);
        return $image;
    }
?>