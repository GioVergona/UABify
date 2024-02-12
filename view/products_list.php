<div class="container">
    <h1 style="text-align:center;"> <?php echo $title; ?> </h1>
    <div class="row">
        <ul class="list album-list">
            <?php foreach ($products as $product): ?>
                <li class="col album-item" onclick="show_details(<?php echo $product['id'];?>)">
                    <img src="<?php echo $product['cover']?>" alt="<?php echo $product['title'] ?> Cover Image">
                    <div class="album-details">
                        <div class="album-title">
                            <?php echo $product['title'] ?>
                        </div>
                        <div class="album-price">
                            <?php echo "<p> Price: ".$product['price']."$"; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
