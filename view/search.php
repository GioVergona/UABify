<?php

    if($results){ 
        echo "<h1 style=\"text-align:center;\"> Results for: \"".$searched_product."\"</h1>";
?>
    
    <div class="container">
        <div class="row">
            <ul class="list album-list">
                <?php foreach ($results as $product): ?>
                    <li class="col album-item" onclick="show_details(<?php echo $product['id'];?>)">
                        <img src="<?php echo $product['cover']?>" alt="<?php echo $product['title'] ?> Cover Image">
                        <div class="album-details">
                            <div class="album-title">
                            <?php echo $product['title'] ?>
                        </div>
                        <div class="album-price">
                            <?php echo "<p> Price: ".$product['price']."$"; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php
    }else{
        echo "<h3 style=\"text-align:center; padding-top: 20px;\"> No album found with such name! </h3>";
    }

?>

