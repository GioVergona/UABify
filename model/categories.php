<?php

    function getCategories() {
        
        $conn = getConn();
        $sql = "SELECT * FROM genre"; // Prepares the database query.
        $params = [];
        $results = pg_query_params($conn, $sql, $params); // Sends the query to DB.
        $categories = pg_fetch_all($results); // Takes the query results.
        return $categories;
    }

    

    function getCategoryById($categoryId){
        $conn = getConn();
        $sql = "SELECT * FROM genre WHERE id = $categoryId"; 
        $params = [];
        $results = pg_query_params($conn, $sql, $params);
        $category = pg_fetch_assoc($results);
        return $category;
    }

