<?php
// Veritabani baglantisi
require_once "db_connection.php";

// 'id' parametresini kontrol et ve reddetme islemini gerceklestir
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id']; // POST isteginden 'id' degerini al
    
    // 'onay_durum' degerini 'Reddedildi' olarak guncelle
    $updateSql = "UPDATE tesvik SET onay_durum = 'Reddedildi' WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        echo "Reddetme islemi basariyla gerceklestirildi.";
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
?>
