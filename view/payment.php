<?php
    if (isset($_SESSION['user_id'])){
        echo "<h1 class='title'> Purchase Resume </h1>";
        echo "<h3 class='purchase'> Order purchased correctly </h3>";

    }else{
        echo "<h3 style=\"text-align:center; padding-top: 20px;\">To place an order you must be logged-in!</h3>";
    }
?>

