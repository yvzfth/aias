<?php
// Veritabanı bağlantısı
require_once "db.php";

// Gelen veri
$activity_id = $_POST['activity_id'];

// SQL query
$sql = "SELECT point, description FROM activities WHERE activity_id = ?";

// Prepare and execute the query
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $activity_id);
$stmt->execute();

// Get the results and return in JSON format
$result = $stmt->get_result();
$data = $result->fetch_assoc();
echo json_encode($data);

// Close the connection
$stmt->close();
$conn->close();
