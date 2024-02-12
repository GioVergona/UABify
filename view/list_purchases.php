<h1>My Purchases</h1>

    <?php
        if ($orders) {
            foreach ($orders as $order) {
                echo "<div class='order-container'>";
                echo "<h3>Order " . $order['id'] . "</h3>";
                echo "<div class='order-details'>";
                echo "<p>Purchase date: " . $order['date'] . "</p>";
                echo "<p>Total cost: $" . $order['total_cost'] . "</p>";
                echo "</div>";

                foreach ($ordersLines as $orderLine) {
                    if ($order['id'] == $orderLine['order_id']) {
                        $productId = $orderLine['product_id'];
                        $image = $images[$productId];

                        echo "<div class='product-container'>";
                        echo "<img class='product-image' src='" . $image['cover'] . "'/>";
                        echo "<div class='product-details'>";
                        echo "<p>" . $orderLine['product_name'] . "</p>";
                        echo "<p>Unit cost: $" . $orderLine['unit_cost'] . "</p>";
                        echo "<p>Quantity: x" . $orderLine['quantity'] . "</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                }

                echo "</div>"; // Closing order-container
            }
        } else {
            echo "<h3 class='no-purchase'>You haven't placed any purchase yet!</h3>";
        }
    ?>