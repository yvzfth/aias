<?php
require_once "db_connection.php";

$errorMessage = "";

// Handle signup form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $firstname = $_POST["isim"];
    $lastname = $_POST["soyisim"];
    $email = $_POST["mail"];
    $phone = $_POST['telefon']; // Telefon numarasini dogrudan 'telefon' alanindan aliyoruz
    $password = $_POST['sifre']; // Sifreyi dogrudan 'sifre' alanindan aliyoruz

    // Perform validations and sanitize data

    // Hash the password (use a secure hashing algorithm like bcrypt)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if a user with the same phone number exists
    $phoneCheckQuery = "SELECT * FROM users WHERE phone = '$phone'";
    $phoneCheckResult = $conn->query($phoneCheckQuery);

    if ($phoneCheckResult->num_rows > 0) {
        // User with the same phone number already exists, display an error or handle as needed
        $errorMessage = "User with this phone number already exists. Please sign in.";
    } else {
        // Proceed with signup
        // Insert user data into the database
        $sql = "INSERT INTO users (firstname, lastname, email, phone, password) VALUES ('$firstname', '$lastname', '$email', '$phone', '$hashedPassword')";
        if ($conn->query($sql) === TRUE) {
            // Signup success, redirect to index.php
            header("Location: signin.php");
            exit();
        } else {
            // Handle signup failure
            $errorMessage = "Signup failed. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Akademik Tesvik - Yetkili Kayit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css?v=17">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <style>
        /* Hide the up and down arrows for all browsers */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            appearance: none;
            margin: 0;
            /* Optional: You can add margin if needed */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body class="p-4 bg-light">

    <div class="col-md-6 m-auto max-w-500-px">
        <div class="card p-5 shadow">
            <form action="signup.php" method="post" id="kayitForm">
                <div class="text-center">
                    <img src="img/logo-kucuk.png" width="140">
                </div>

                <div class="text-center mt-4">
                    <h4 class="fw-semibold opacity-75">Akademik Tesvik Sistemi</h4>
                    <h6 class="fw-semibold opacity-75">Yetkili Kayit Paneli</h6>
                </div>

                <div class="input-group mt-4">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" name="isim" placeholder="İsim" required>
                </div>

                <div class="input-group mt-2">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text" class="form-control" name="soyisim" placeholder="Soyisim" required>
                </div>

                <div class="input-group mt-2">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email" class="form-control" name="mail" placeholder="Email" required>
                </div>

                <div class="input-group mt-2">
                    <span class="input-group-text">
                        <i class="bi bi-phone"></i>
                    </span>
                    <input type="text" class="form-control telefon" name="telefon" placeholder="(5__) ___ __ __" required>
                </div>

                <div class="input-group mt-2">
                    <span class="input-group-text position-relative">
                        <i class="bi bi-shield-lock"></i> <span class="text-primary position-absolute top-0 end-0 translate-middle-x z-3" data-toggle="tooltip" data-placement="right" title="Şifreniz sadece sayı içeremez!">
                            <img src="img/info.svg" alt="info" width="12" height="12" class="mb-1">
                        </span>
                    </span>
                    <input type="password" class="form-control" name="sifre" placeholder="Şifre" required pattern=".*[^\d].*">

                </div>


                <script>
                    $(function() {
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                </script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>



                <div class="row mt-3">
                    <div class="col-6 text-start d-flex align-items-center">

                    </div>
                    <div class="col-6 text-end">
                        <button type="submit" class="btn btn-danger fw-semibold" name="signup">Kaydet</button>
                    </div>
                </div>

                <?php if (!empty($errorMessage)) : ?>
                    <div class="error-message mt-3">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>
            </form>
            <div>
                <a href="signin.php"><button class="btn btn-primary">Kullanıci Girişi</button> </a>
            </div>
        </div>
    </div>
    <div class="text-center text-black opacity-8 mt-3">Copyright © İstanbul Nisantasi Universitesi 2023</div>
    </div>

    <!-- JavaScript dosyalarini buraya ekleyebilirsiniz -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>