<?php
    session_start();
    $filesAbsolutePath = '/home/TDIW/tdiw-i4/public_html/files/';
    $filesPublicPath = '/../files/';
    $action = $_GET['action'] ?? null;

  
   

    switch($action){
    case 'categories':
        require __DIR__.'/resource_categories_list.php';
        break;
    case 'products':
        require __DIR__.'/resource_products_list.php';
        break;
    case 'register':
        require __DIR__.'/resource_register.php';
        break;
    case 'register_complete':
        require __DIR__.'/resource_registration_complete.php';
        break;
    case 'login_complete':
        require __DIR__.'/resource_login_complete.php';
        break;
    case 'product_details':
        require __DIR__.'/resource_product_details.php';
        break;
    case 'login':
        require __DIR__.'/resource_login.php';
        break;
    case 'add_cart':
        require __DIR__.'/resource_add_cart.php';
        break;
    case 'cart_summary':
        require __DIR__ . '/resource_cart_summary.php';
        break;
    case 'update_footer':
        require __DIR__ . '/resource_update_footer.php';
        break;
    case 'payment':
        require __DIR__.'/resource_payment.php';
        break;
    case 'edit_profile':
        require __DIR__.'/resource_edit_profile.php';
        break;
    case 'clear_cart':
        require __DIR__.'/resource_clear_cart.php';
        break;
    case 'list_purchases':
        require __DIR__.'/resource_list_purchases.php';
        break;    
    case 'logout':
        require __DIR__.'/resource_logout.php';
        break;
    case 'remove_product':
        require __DIR__.'/resource_remove_product.php';
        break;
    case 'search':
        require __DIR__.'/resource_search.php';
        break;
    default:
        require __DIR__.'/resource_categories_list.php';
        break;
    }
?>


<!--UTILITY: 
    Page: https://tdiw-i4.deic-docencia.uab.cat/
    DB: https://deic-docencia.uab.cat/phppgadmin/
-->