<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
    }

    $message = "Logged Out!";
    header("Location: https://tdiw-i4.deic-docencia.uab.cat/index.php?action=categories&success_message=".urlencode($message));
    die();
?>