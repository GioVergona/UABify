<?php
    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/payment.php';
    require_once __DIR__.'/../model/products_list.php';
    
    if(isset($_SESSION['user_id'])){
        $total_cost = 0;
        $number_of_products = 0;
        foreach ($_SESSION['cart'] as $productId=>$productData){
            $total_cost += $productData['quantity']*$productData['price'];
            $number_of_products += $productData['quantity'];
        }
         
        $purchaseId = finishPayment($total_cost, $number_of_products);
        foreach ($_SESSION['cart'] as $productId=>$productData){
            $details = getDetailsByProduct($productId);
            $name = $details['title'];
            $total_cost = $productData['price']*$productData['quantity'];
            $results = addOrderLine($name, $productData['quantity'], $productData['price'], $total_cost, $purchaseId, $productId);
        }
        unset($_SESSION['cart']);
    }
    require __DIR__.'/../view/payment.php';
?>