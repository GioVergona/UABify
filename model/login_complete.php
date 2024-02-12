<?php

    function verify_credentials($conn, string $email, string $password) {
        
        $sql = "SELECT id, email, password FROM customer WHERE email=$1 LIMIT 1";
        $params = [$email];
        $result = pg_query_params($conn, $sql, $params); // Sends the query to DB.
        if (!$result) {
            echo "Error in query: " . pg_last_error($conn);
            return false;
        }
        if (pg_num_rows($result) === 0) {
            return false;
        }
        $user = pg_fetch_assoc($result,0); // Takes the query results.
        return password_verify($password,$user['password']) ? $user:null;
    }