<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Required fields
    $expected_fields = ['id', 'name', 'surname', 'title', 'department', 'basic_field', 'scientific_field', 'academic_activity_type', 'activity', 'work_name', 'doi_number', 'persons'];
    $data = [];

    // Check if all required fields are present
    foreach ($expected_fields as $field) {
        if (!isset($_POST[$field])) {
            throw new Exception("Missing required field: $field");
        }
        // Sanitize the data
        $data[$field] = htmlspecialchars($_POST[$field]);
    }

    try {
        // Database connection
        require_once "db_connection.php";

        // Prepare SQL statement
        $sql = "UPDATE tesvik SET 
                name = ?, 
                surname = ?, 
                title = ?, 
                department = ?, 
                basic_field = ?, 
                scientific_field = ?, 
                academic_activity_type = ?, 
                activity = ?, 
                work_name = ?, 
                doi_number = ?,
                persons = ?
                WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            throw new Exception("SQL preparation error: " . $conn->error);
        }

        // Bind parameters and execute statement
        $stmt->bind_param("sssssssssssi", $data['name'], $data['surname'], $data['title'], $data['department'], $data['basic_field'], $data['scientific_field'], $data['academic_activity_type'], $data['activity'], $data['work_name'], $data['doi_number'], $data['persons'], $data['id']);
        
        if (!$stmt->execute()) {
            throw new Exception("Row update error: " . $stmt->error);
        }

        echo "Row successfully updated";
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        // Close the statement and connection
        if ($stmt) {
            $stmt->close();
        }
        $conn->close();
    }
} else {
    echo "Invalid request method";
}
?>