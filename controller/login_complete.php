<?php

  require_once __DIR__.'/../model/connectDB.php';
  require_once __DIR__.'/../model/login_complete.php';

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $filters = filter_input_array(
        INPUT_POST, 
        [
          'email' => FILTER_VALIDATE_EMAIL,
          'password' => FILTER_DEFAULT,
        ]
      );
      
    $email = $filters['email'];
    $pwd = $filters['password'];
    $conn = getConn();
    
    $user = verify_credentials($conn,$email,$pwd);

    if ($user) {
      $_SESSION['user_id'] = $user['id'];
      $message = "User logged-in succesfully!";
    } else {
      $message = "Wrong email or password!"; 
    }
    header("Location: https://tdiw-i4.deic-docencia.uab.cat/index.php?action=categories&success_message=".urlencode($message));

  }
?>
