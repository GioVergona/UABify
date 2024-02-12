<div class="container album-details-container">
    <h1 id="productTitle" style="text-align:center;"><?php echo $title; ?></h1>
    <div class="row">
        <div class="album-image">
            <img src="<?php echo $details['cover']; ?>" alt="<?php echo $title; ?> Cover Image">
        </div>
        <div class="album-info">
            <p class="description"><?php echo $details['description']; ?></p>
            <p class="credits"><?php echo "Credits: " . $details['credits']; ?></p>
            <p class="availability">
                <?php echo ($details['active']) ? "AVAILABLE IN STORE" : "NOT AVAILABLE IN STORE"; ?>
            </p>
            <p id="productPrice"><?php echo "Price: $" . $details['price']; ?></p>
            <p class="songs-number"><?php echo "Number of songs: " . $details['songs_number']; ?></p>
            <p class="release-date"><?php echo "Released on: " . $details['release_date']; ?></p>
            <div id="quantity-selector" class="quantity-selector">
                <div class="quantity-btn" onclick="changeQuantity(-1)">-</div>
                    <input type="text" id="quantity" class="quantity" name="quantity" value="1" readonly>
                <div class="quantity-btn" onclick="changeQuantity(+1)">+</div>
            </div>
            <p>
                <button type="button" class="addToCartButton" onclick="addCart(<?php echo $productId; ?>,<?php echo $details['price']; ?>)">
                    Add to cart
                </button>
            </p>
            <div id="responseMessage" class="response-message"></div>
        </div>
    </div>
</div>