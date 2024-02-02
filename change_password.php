<?php
session_start();
require 'db_connection.php';

// Initialize error and success messages
$errorMessage = '';
$successMessage = '';

// Initialize session row variable
$role = $_SESSION['role'] ?? 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['change_password'])) {
    $currentPassword = $_POST['current_password'] ?? '';
    $newPassword = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    $userId = $_SESSION['user_id'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($currentPassword, $user['password'])) {
            if ($newPassword === $confirmPassword) {
                // Use prepared statement for updating password
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                $stmt->bind_param("si", $newPasswordHash, $userId);

                if ($stmt->execute()) {
                    $successMessage = "Sifre basariyla degistirildi.";
                } else {
                    $errorMessage = "Sifre degistirilirken bir hata olustu.";
                }
            } else {
                $errorMessage = "Yeni sifre ve yeni sifre tekrari eslesmiyor";
            }
        } else {
            $errorMessage = "Guncel sifre yanlis.";
        }
    } else {
        $errorMessage = "Kullnici bulunamadi, giris yapin.";
    }
}

// Retrieve and clear the messages from the session
$errorMessage = $_SESSION['errorMessage'] ?? $errorMessage;
$successMessage = $_SESSION['successMessage'] ?? $successMessage;
unset($_SESSION['errorMessage'], $_SESSION['successMessage']);
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Akademik Tesvik - Password Change</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css?v=17">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>


<body class="p-4 bg-light">
    <div>
        <?php if ($role == 1) : ?>
            <?php include 'NavbarAdmin.php'; ?>
        <?php else : ?>
            <?php include 'Navbar.php'; ?>
        <?php endif; ?>

        <div class="col-md-6 m-auto max-w-500-px">
            <div class="card p-5 shadow">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="text-center">
                        <img src="img/logo-kucuk.png" width="140">
                    </div>

                    <div class="text-center mt-4">
                        <h4 class="fw-semibold opacity-75">Akademik Teşvik Sistemi</h4>
                        <h6 class="fw-semibold opacity-75">Sifre Değiştirme</h6>
                    </div>

                    <div class="input-group mt-4">
                        <span class="input-group-text">
                            <i class="bi bi-shield-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Guncel Sifre" required>
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('current_password')">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>

                    <div class="input-group mt-2 pt-4">
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Yeni Sifre" required>
                    </div>

                    <div class="input-group mt-2">
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Yeni Sifre Tekrari" required>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6 text-start d-flex align-items-center">

                        </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-info-2 fw-semibold" name="change_password">Şifreyi Değiştir</button>
                        </div>
                    </div>


                    <?php if (!empty($errorMessage)) : ?>
                        <div class="error-message mt-3">
                            <?php echo $errorMessage; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($successMessage)) : ?>
                        <div class="success-message mt-3">
                            <?php echo $successMessage; ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>

            <div class="text-center text-black opacity-8 mt-3">Copyright © İstanbul Nişantaşi Üniversitesi 2023</div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId) {
            const input = document.getElementById(inputId);
            const button = input.nextElementSibling;
            if (input.type === "password") {
                input.type = "text";
                button.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                input.type = "password";
                button.innerHTML = '<i class="bi bi-eye"></i>';
            }
        }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>