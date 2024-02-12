<!--resource categories list-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="view/resources/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" 
    integrity="sha512-" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/home_style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="./js/jquery-3.7.1.im.js"></script>
    <script src="./js/script.js"></script>
    <title>UABify</title>
</head>
<body>
    <div id = "body">
    <?php require __DIR__.'/controller/navigation_bar.php'; ?>

    <div id = "main_menu">
        <div class="container">
            <?php require __DIR__.'/controller/categories_list.php'; ?>
        </div>
    </div>
    <footer id='foot'>
        <?php require __DIR__.'/controller/cart_footer.php'; ?>
    </footer>
    </div>

</body>
</html>