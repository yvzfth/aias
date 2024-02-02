<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    require_once "db_connection.php";

    // Retrieve user details based on user_id stored in the session
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Display current user information
        //echo "Welcome, " . $user['phone'];  // Display whatever user information you want
    }
} else {
    // If user is not logged in, you can redirect to the signin page or perform other actions
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Akademik Teşvik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- jQuery CDN ekleyin -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/main.css?v=17">
    <style>
        /* Hide the up and down arrows for all browsers */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
            /* Optional: You can add margin if needed */
        }

        .login-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            /* Diger ogelerin uzerine cikmasi icin z-index degeri */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <?php include "Navbar.php"; ?>
    <form id="applicationForm" action="create_table.php" method="POST" class="mb-4" enctype="multipart/form-data">
        <div class="mt-5 row g-0">
            <div class="col-lg-10 m-auto">
                <div class="card shadow p-4">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="h5 opacity-75 mt-4">Akademik Teşvik Başvuru Sistemi</p>
                            <p class="h6 opacity-50">Academic Incentive Application System</p>
                        </div>
                        <div class="col">
                            <div class="col-8 mt-3 text-right">
                                <label class="fw-semibold">
                                    <span>Başvuru Dönemi</span>
                                    <span> / </span>
                                    <span class="opacity-50">Application Period</span>
                                </label>
                                <select required class="form-control" name="submission_period">
                                    <option value="">Seçiniz...</option>
                                    <?php
                                    $months = array(
                                        'January' => 'Ocak',
                                        'February' => 'Şubat',
                                        'March' => 'Mart',
                                        'April' => 'Nisan',
                                        'May' => 'Mayıs',
                                        'June' => 'Haziran',
                                        'July' => 'Temmuz',
                                        'August' => 'Ağustos',
                                        'September' => 'Eylül',
                                        'October' => 'Ekim',
                                        'November' => 'Kasım',
                                        'December' => 'Aralık'
                                    );

                                    $currentMonth = date('F');
                                    $start = array_search($currentMonth, array_keys($months));

                                    for ($i = $start; $i < $start + 12; $i++) {
                                        $month = array_keys($months)[$i % 12];
                                        echo "<option value='$month'>" . $months[$month] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="col-12">
                                <div class="row academicInfo">
                                    <div class="col-6 mt-1">
                                        <label class="fw-semibold">
                                            <span>Ad</span>
                                            <span> / </span>
                                            <span class="opacity-50">Name</span>
                                        </label>
                                        <input readonly required class="form-control" type="text" name="name" value="<?php echo isset($user['firstname']) ? htmlspecialchars($user['firstname']) : ''; ?>">

                                    </div>

                                    <div class="col-6 mt-1">
                                        <label class="fw-semibold">
                                            <span>Soyad</span>
                                            <span> / </span>
                                            <span class="opacity-50">Surname</span>
                                        </label>
                                        <input readonly required class="form-control" type="text" name="surname" value="<?php echo isset($user['lastname']) ? htmlspecialchars($user['lastname']) : ''; ?>">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>E-posta</span>
                                    <span> / </span>
                                    <span class="opacity-50">E-mail</span>
                                </label>
                                <input readonly required class="form-control" type="email" name="email" value="<?php echo isset($user['email']) ? htmlspecialchars($user['email']) : ''; ?>">
                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Akademik Ünvan</span>
                                    <span> / </span>
                                    <span class="opacity-50">Academic Title</span>
                                </label>

                                <select class="form-control" name="title" required>
                                    <option value="">Seçiniz...</option>
                                    <option value="Prof. Dr.">Prof. Dr.</option>
                                    <option value="Doc. Dr.">Doç. Dr.</option>
                                    <option value="Dr. ogr. Uyesi.">Dr. oğr. Üyesi.</option>
                                    <option value="ogr. Gor.">Oğr. Gör.</option>
                                    <option value="Ars. Gor.">Arş. Gör.</option>
                                    <option value="Uzman. Gor.">Uzman. Gör.</option>
                                </select>
                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Fakülte</span>
                                    <span> / </span>
                                    <span class="opacity-50">Faculty</span>
                                </label>

                                <select id="first-select" class="form-control" name="faculty" onchange="updateSecondSelect()" required>
                                    <option value="">Seciniz...</option>
                                    <option value="Engineering">Mühendislik ve Mimarlık Fakültesi</option>
                                    <option value="Economy">İktisadi, idari ve Sosyal Bilimler Fakultesi</option>
                                    <option value="Art">Sanat ve Tasarım Fakuültesi</option>
                                    <option value="Medicine">Tıp Fakültesi</option>
                                </select>
                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Departman</span>
                                    <span> / </span>
                                    <span class="opacity-50">Department</span>
                                </label>
                                <select id="second-select" class="form-control" name="department" required>
                                    <option value="">Seçiniz</option>
                                </select>
                            </div>

                            <script>
                                const options = {
                                    Economy: [
                                        "Ekonomi",
                                        "Ekonomi ve Finans",
                                        "Finans ve Bankacılık",
                                        "Gazetecilik",
                                        "Halkla İlişkiler ve Reklamcılık",
                                        "Havacılık Yönetimi (Türkçe/İngilizce)",
                                        "İngiliz Dili ve Edebiyatı (İngilizce)",
                                        "İngilizce Mütercim ve Tercümanlık",
                                        "İşletme (İngilizce)",
                                        "İşletme (Türkçe)",
                                        "Psikoloji",
                                        "Psikoloji (İngilizce)",
                                        "Sağlık Yönetimi",
                                        "Siyaset Bilimi ve Kamu Yönetimi",
                                        "Sosyal Hizmet (Türkçe/İngilizce)",
                                        "Sosyoloji",
                                        "Tarih",
                                        "Uluslararası İlişkiler (Türkçe/İngilizce)",
                                        "Uluslararası Ticaret ve Lojistik",
                                        "Yeni Medya ve İletişim",
                                        "Yeni Medya ve İletişim (İngilizce)",
                                        "Yönetim Bilişim Sistemleri (Türkçe/İngilizce)",
                                    ],
                                    Medicine: [
                                        'Cerrahi Tıp Bilimleri Bölümü',
                                        'Dahili Tıp Bilimleri Bölümü',
                                        'Temel Tıp Bilimleri Bölümü',

                                    ],
                                    Engineering: [
                                        "Bilgisayar Mühendisliği(Türkçe)",
                                        "Elektrik-Elektronik Mühendisliği (Türkçe / İngilizce)",
                                        "Endüstri Mühendisliği(Türkçe)",
                                        "İç Mimarlık ve Çevre Tasarımı(Türkçe)",
                                        "İnşaat Mühendisliği (İngilizce/Türkçe)",
                                        "Makine Mühendisliği(Türkçe)",
                                        "Mekatronik Mühendisliği(Türkçe)",
                                        "Mimarlık (İngilizce/Türkçe)",
                                        "Yazılım Mühendisliği (İngilizce)",
                                    ],
                                    Art: [
                                        "Dijital Oyun Tasarımı",
                                        "Endüstriyel Tasarım",
                                        "Gastronomi ve Mutfak Sanatları",
                                        "Grafik Tasarımı",
                                        "İç Mimarlık",
                                        "İç Mimarlık (İngilizce)",
                                        "İletişim ve Tasarımı",
                                        "Müzik (STF)",
                                        "Radyo, Televizyon ve Sinema",
                                        "Sahne ve Gösteri Sanatları Yönetimi",
                                        "Tekstil ve Moda Tasarımı",
                                    ]
                                };

                                function updateSecondSelect() {
                                    const firstSelect = document.getElementById('first-select');
                                    const secondSelect = document.getElementById('second-select');
                                    const selectedOption = firstSelect.value;

                                    // Clear existing options
                                    secondSelect.innerHTML = '<option value="">Select Options</option>';

                                    if (selectedOption) {
                                        const selectedOptions = options[selectedOption];
                                        selectedOptions.forEach(option => {
                                            const newOption = document.createElement('option');
                                            newOption.value = option;
                                            newOption.textContent = option;
                                            secondSelect.appendChild(newOption);
                                        });
                                    }
                                }
                            </script>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Yazar Sayısı</span>
                                    <span> / </span>
                                    <span class="opacity-50">Number of Authors</span>
                                </label>
                                <select class="form-control" name="persons" required>
                                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                                        <option value="<?php echo $i; ?>">
                                            <?php echo $i; ?>
                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>


                        <div class="col">
                            <div class="col-12 mt-3 ">
                                <label class="fw-semibold">
                                    <span>Temel Alan</span>
                                    <span> / </span>
                                    <span class="opacity-50">Basic Field</span>
                                </label>
                                <input class="form-control" type="text" placeholder="Temel Alanınızı girin" name="basic_field" required>
                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Bilimsel Alan</span>
                                    <span> / </span>
                                    <span class="opacity-50">Scientific Field</span>
                                    <span class="text-primary" data-toggle="tooltip" data-placement="right" title="En Yakın Bilim Alanını Yazınız. UAK Docentlik temel alanları dikkate alınacaktır.">
                                        <img src="img/info.svg" alt="info" width="12" height="12" class="mb-1">
                                    </span>
                                </label>
                                <input class="form-control" type="text" placeholder="Bilimsel Alanınızı girin" name="scientific_field" required>

                                <script>
                                    $(function() {
                                        $('[data-toggle="tooltip"]').tooltip()
                                    })
                                </script>
                            </div>


                            <!-- Academic Activity Type Seçimi -->
                            <div class="col-12 mt-1">


                                <label class="fw-semibold">
                                    <span>Akademik Faaliyet Türü</span>
                                    <span> / </span>
                                    <span class="opacity-50">Academic Activity Type</span>
                                </label>
                                <select class="form-control" id="academic_activity_type" name="academic_activity_type" required>
                                    <option value="">Seçiniz...</option>
                                    <?php
                                    // Veritabanı bağlantısı
                                    require_once "db.php";

                                    // Academic activity types'ları çek
                                    $query = "SELECT DISTINCT academic_activity_type FROM activities";
                                    $result = $conn->query($query);

                                    // Sonuçları doğrudan dizi olarak al
                                    $types = array();
                                    while ($row = $result->fetch_assoc()) {
                                        $types[] = $row['academic_activity_type'];
                                    }

                                    // Her bir academic activity type için option elemanını oluştur
                                    foreach ($types as $type) {
                                        echo "<option value=\"$type\">$type</option>";
                                    }

                                    // Bağlantıyı kapat
                                    $conn->close();
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 mt-1">

                                <!-- Activity ID Seçimi -->
                                <label class="fw-semibold">
                                    <span>Faaliyet</span>
                                    <span> / </span>
                                    <span class="opacity-50">Activity</span>
                                </label>
                                <select class="form-control" id="activity_id" name="activity_id" required>
                                </select>

                                <!-- Description ve Point -->
                            </div>
                            <div class="col-12 mt-1">


                                <!-- <label class="opacity-50" for="point">Point:</label> -->
                                <input hidden class="form-control" type="text" id="point" name="point" readonly>

                            </div>
                            <script>
                                $("#academic_activity_type").val() == "" ? $("#activity_id").prop("disabled", true) : $("#activity_id").prop("disabled", false);
                                $("#academic_activity_type").change(function() {
                                    var selectedType = $(this).val();

                                    $.ajax({
                                        url: "get_activities.php",
                                        type: "POST",
                                        data: {
                                            academic_activity_type: selectedType
                                        },
                                        success: function(response) {
                                            var data = JSON.parse(response);
                                            $("#activity_id").empty();

                                            for (var i = 0; i < data.length; i++) {
                                                $("#activity_id").append("<option value='" + data[i].activity_id + "'>" + data[i].activity_id + " - " + data[i].description + "</option>");
                                            }
                                            $("#academic_activity_type").val() != "" ? $("#activity_id").prop("disabled", false) : $("#activity_id").prop("disabled", true);
                                            // Trigger the change event manually
                                            $("#activity_id").change();
                                        }
                                    });
                                });

                                $("#activity_id").change(function() {
                                    var selectedActivityId = $(this).val();

                                    $.ajax({
                                        url: "get_point.php",
                                        type: "POST",
                                        data: {
                                            activity_id: selectedActivityId
                                        },
                                        success: function(response) {
                                            var data = JSON.parse(response);
                                            $("#description").val(data.description);
                                            $("#point").val(data.point);
                                        }
                                    });
                                });
                            </script>




                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Eser Adı</span>
                                    <span> / </span>
                                    <span class="opacity-50">Work Name</span>
                                </label>
                                <input class="form-control" type="text" name="work_name" required>

                            </div>

                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Doi Numarasi</span>
                                    <span> / </span>
                                    <span class="opacity-50">Doi Number</span>
                                </label>
                                <input class="form-control" type="text" name="doi_number" required>
                            </div>



                            <div class="col-12 mt-1">
                                <label class="fw-semibold">
                                    <span>Dosya Yükleme</span>
                                    <span> / </span>
                                    <span class="opacity-50">File Upload</span>
                                </label>
                                <input class="form-control" type="file" name="file_upload[]" accept="application/pdf" multiple required>
                                <small class="form-text text-muted">Dosya yükleyiniz.</small>
                            </div>
                        </div>

                        <div class="col-12 my-4 text-center">
                            <input id="submitBtn" value="Gönder" type="submit" class="btn btn-primary px-5 fw-semibold ms-3" name="submit_btn">
                        </div>

                        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                        <!-- <script>
                            $('#applicationForm').submit(function(e) {
                                e.preventDefault();

                                $.ajax({
                                    type: 'POST',
                                    url: $(this).attr('action'),
                                    data: $(this).serialize(),
                                    success: function() {
                                        $('#successModal').modal('show');

                                        $('#successModal').on('hidden.bs.modal', function() {
                                            window.location.href = '/'; // Redirect to home page
                                        });
                                    }
                                });
                            });
                        </script> -->

                    </div>
                </div>
            </div>
            <div class="text-center text-black opacity-8 mt-3">Copyright © İstanbul Nişantaşı Üniversitesi </div>
        </div>
    </form>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Teşekkür ederiz! Başvurunuz başarıyla alınmiştır!
                    </h5>
                </div>
                <div class="modal-footer">
                    <a href="user_panel.php">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kapat</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>