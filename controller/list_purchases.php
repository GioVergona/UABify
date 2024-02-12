<?php

    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/list_purchases.php';

    $userId = $_SESSION['user_id'];
    $orders = getOrders($userId);
    if($orders){
        $ordersLines = getOrdersLines($orders);
        $images=[];
        foreach($ordersLines as $orderLine){
            $images[$orderLine['product_id']] = getImage($orderLine['product_id']);
        }
    }

    require __DIR__.'/../view/list_purchases.php';
?>