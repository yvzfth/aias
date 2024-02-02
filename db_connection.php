<?php
// Database connection details
require_once "db.php";


// Check if the users table exists, if not, create it
$table_name = "users";
$table_check_query = "SHOW TABLES LIKE '$table_name'";
$table_result = $conn->query($table_check_query);

if ($table_result->num_rows == 0) {
    // Table does not exist, create it
    $create_table_query = "CREATE TABLE $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(25),
        lastname VARCHAR(25), 
        email VARCHAR(50),
        phone VARCHAR(20) NOT NULL,
        password VARCHAR(255) NOT NULL,
        role INT(1)
        -- Add more columns as needed
    )";

    if ($conn->query($create_table_query) === TRUE) {
        // Table created successfully
    } else {
        // Error creating table
        echo "Error creating table: " . $conn->error;
    }
}
