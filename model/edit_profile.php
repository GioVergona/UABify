<?php

    function getUserById($id){
        $conn = getConn();
        $sql = "SELECT * FROM customer WHERE id = $1"; 
        $params = [$id];
        $results = pg_query_params($conn, $sql, $params); 
        $user = pg_fetch_assoc($results); 
        return $user;
    }
    
    function updateUser($userId, $name, $email, $address, $city, $profile_pictue, $zip_code){
        $conn = getConn();
        $sql = "UPDATE customer SET name = $2, email = $3, address = $4, city = $5, profile_picture = $6, zip_code = $7 WHERE id = $1"; 
        $params = [$userId, $name, $email, $address, $city, $profile_pictue, $zip_code];
        $results = pg_query_params($conn, $sql, $params); 
        $user = pg_fetch_assoc($results); 
        return $user;
    }
?>