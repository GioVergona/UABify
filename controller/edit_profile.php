<?php
    require_once __DIR__.'/../model/connectDB.php';
    require_once __DIR__.'/../model/edit_profile.php';

    $userId = $_SESSION['user_id'];
    $user = getUserById($userId);

    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $filters = filter_input_array(
            INPUT_POST, 
            [
              'name' => FILTER_DEFAULT,
              'email' => FILTER_DEFAULT,
              'address' => FILTER_DEFAULT,
              'city' => FILTER_DEFAULT,
              'zip_code' => FILTER_DEFAULT,
            ]
        );
    
    $name = $filters['name']; 
    $email = $filters['email'];
    $address = $filters['address'];
    $city = $filters['city'];
    $zip_code = $filters['zip_code'];
    $imageName = $user['profile_picture'];
    if (!empty($_FILES['profile_picture'])&&!empty($_FILES['profile_picture']['name'])){
      $imageName = basename($_FILES['profile_picture']['name']);
      move_uploaded_file($_FILES['profile_picture']['tmp_name'], $filesAbsolutePath.$_FILES['profile_picture']['name']);
    }

    $result = updateUser($userId, $name, $email, $address, $city, $imageName, $zip_code);
    header("Location: index.php");
  }

  require __DIR__.'/../view/edit_profile.php';
?>