<span> <h3> Cart </h3> </span>
<?php
    if (!empty($cartData)) {

        // Initialize total quantity and total price
        $totalQuantity = 0;
        $totalPrice = 0;

        // Loop through each product in the cart
        foreach ($cartData as $productId => $productData) {               
            $price = $productData['price'];
            $quantity = $productData['quantity'];
            $totalPrice +=  $quantity * $price;
            $totalQuantity += $quantity;        
        }
        // Display total quantity and total price
        echo '<span>Total Quantity: ' . $totalQuantity . '</span>';
        echo '<span> Total Price: $' . number_format($totalPrice, 2) . '</span>';
    } else {
        echo '<p>Your shopping cart is empty</p>';
    }
 ?>