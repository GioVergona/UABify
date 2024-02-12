<?php

  require_once __DIR__.'/../model/connectDB.php';
  require __DIR__.'/../model/registration_complete.php';
  
  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $filters = filter_input_array(
        INPUT_POST, 
        [
          'name' => FILTER_DEFAULT,
          'email' => FILTER_VALIDATE_EMAIL,
          'password' => FILTER_DEFAULT,
          'address' => FILTER_DEFAULT,
          'city' => FILTER_DEFAULT,
          'zip_code' => FILTER_VALIDATE_INT,
        ]
      );

      $conn = getConn();
      $name = $filters['name'];
      $email = $filters['email'];
      $pwd_hash = password_hash($filters['password'], PASSWORD_BCRYPT);
      $address = $filters['address'];
      $city = $filters['city'];
      $zipcode = $filters['zip_code'];
      
      $result = insert_user($conn,$name,$email,$pwd_hash,$address,$city,$zipcode);

      if ($result) {
        $message = "User registerd succesfully!";
      } else {
        $message = "Wrong data inserted, try again";
      }
      header("Location: https://tdiw-i4.deic-docencia.uab.cat/index.php?action=categories&success_message=".urlencode($message));
      die();
  }

?>
