<?php
// Veritabanı bağlantısı
require_once "db.php";

// Gelen veri
$academic_activity_type = $_POST['academic_activity_type'];

// SQL sorgusu
$sql = "SELECT activity_id, description FROM activities WHERE academic_activity_type = ?";

try {
    // Sorguyu hazırla ve çalıştır
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $academic_activity_type);
    $stmt->execute();

    // Sonuçları al
    $result = $stmt->get_result();

    // Sonuçları JSON formatında döndür
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} catch (Exception $e) {
    die("Sorgu hatası: " . $e->getMessage());
}

// Bağlantıyı kapat
$stmt->close();
$conn->close();
