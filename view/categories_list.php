<?php 

if(isset($_GET['success_message'])){
    $successMessage = urldecode($_GET['success_message']);
    if($successMessage=="Wrong email or password!"){
        echo "<div id='insuccess-message'>$successMessage</div>";
        unset($_GET['success_message']);
        echo "</br>";
    }else{
        echo "<div id='success-message'>$successMessage</div>";
        unset($_GET['success_message']);
        echo "</br>";
    }
} ?>

<h1 class="title" style="text-align: center;">Genres list</h1>

<div class="row">
    <ul class="genre-list">
        <?php foreach ($categories as $category): ?>
        <li class="genre-item col">
            <a onclick="show_products(<?php echo $category['id'];?>)" href="#">
                <div class="genre-thumbnail">
                    <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['name']; ?> Thumbnail">
                </div>
                <div class="genre-name">
                    <?php echo htmlentities($category['name'], ENT_QUOTES|ENT_HTML5,'UTF-8'); ?>
                </div>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
 