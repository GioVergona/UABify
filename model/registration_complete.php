<?php

    function insert_user($conn,$name,$email,$pwd_hash,$address,$city,$zipcode) {
        $sql = "insert into customer (name, email, password, address, city, zip_code, profile_picture)
                values ('$name', '$email', '$pwd_hash', '$address', '$city', '$zipcode', '')";
        $params = [];
        $results = pg_query_params($conn, $sql, $params); // Sends the query to DB.
        
        return $results;
    }