<?php
$total = 0;

// Output a message if the cart is empty
if (empty($cartData)) {
    echo "<h3 style=\"text-align:center; padding-top: 20px;\">Nothing added to the cart yet</h3>";
} else {
    echo "<div class='container'>";
    foreach ($cartData as $productId => $productData) {
        // Use your existing function to get product details based on the product ID
        $productDetails = getDetailsByProduct($productId);
        $iteration = 0;

        // Display product information
        if ($productDetails) {
            $total += $productDetails['price'] * $productData['quantity'];
            ?>
            <div class="row cart-item">
                <div class="col cart-img">
                    <img src="<?php echo $productDetails['cover']; ?>" alt="<?php echo $productDetails['title']; ?> Cover Image">
                </div>
                <div class="col cart-details">
                    <h3><?php echo $productDetails['title']; ?></h3>
                    <p class="cart-price"><?php echo "Price: $" . $productDetails['price']; ?></p>
                    <p class="cart-quantity">
                    <?php echo "Quantity: " ?>
                        <div id="quantity-selector" class="quantity-selector">
                            <div class="quantity-btn" onclick="changeQuantityInCart(-1, <?php echo $productDetails['id']; ?>, <?php echo $productDetails['price']; ?>)">-</div>
                                <input type="text" id="quantity" class="quantity" name="quantity" value="<?php echo $productData['quantity']; ?>" readonly>
                            <div class="quantity-btn" onclick="changeQuantityInCart(+1, <?php echo $productDetails['id']; ?>, <?php echo $productDetails['price']; ?>)">+</div>
                        </div>
                    </p>
                    <button type="button" class="remove-button" onclick="removeProduct(<?php echo $productDetails['id']; ?>)">Remove</button>
                </div>
            </div>
            <?php
        }
        $iteration += 1;
    }
    echo "</div>";
    // Cart summary and action buttons
    ?>
    <div class="container cart-summary">
        <div class="cart-total">
            <h2>Total Price: $<?php echo number_format($total, 2); ?></h2>
        </div>
        <p>
            <button type="button" onclick="finishPayment()" class="finish-payment-button">Finish Payment</button>
            <button type="button" onclick="clearCart()" class="clear-cart-button">Clear Cart</button>
        </p>
    </div>
    <?php
}
?>