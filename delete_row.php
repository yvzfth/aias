<?php
// Check if the ID parameter exists and is valid
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    // Database connection details
    require_once "db.php";

    // Prepare and execute SQL to delete row with the specified ID
    $id = $_POST['id'];
    $sql = "DELETE FROM tesvik WHERE id = $id"; // Replace 'tesvik' with your actual table name
    if ($conn->query($sql) === TRUE) {
        echo "Row deleted successfully";
    } else {
        echo "Error deleting row: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    echo "Invalid ID parameter";
}
