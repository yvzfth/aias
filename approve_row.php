<?php
// Veritabani baglantisi
require_once "db_connection.php";

// Check if 'id' parameter exists in POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id']; // Get ID value from POST data

    // SQL sorgusu ile 'onay_durum' degerini 'Onaylandı' olarak guncelle
    $updateSql = "UPDATE tesvik SET onay_durum = 'Onaylandı' WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Onay durumu basariyla guncellendi.";
        // JavaScript ile sayfanin yenilenmesi
        echo "<script>location.reload();</script>";
    } else {
        echo "Hata olustu: " . $conn->error;
    }
} else {
    echo "Gecersiz istek veya eksik parametre.";
}

// Veritabani baglantisini kapat
$conn->close();
