<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}

// Database connection details
require_once "db.php";

// Retrieve user ID from session
$userId = $_SESSION['user_id'];

// Query user information including the role
$userSql = "SELECT * FROM users WHERE id = '$userId'";
$userResult = $conn->query($userSql);

// Check if the user data is found
if ($userResult->num_rows != 1) {
    // If user data is not found, handle the error (you may redirect to an error page)
    die("Error: User data not found");
}

// Fetch user data
$userData = $userResult->fetch_assoc();
$userRole = $userData['role'];

// Check if the user has admin role (assuming 1 represents admin role)
// Also check if the role is NULL
if ($userRole == 1) {
    // If user does have admin role and role is not NULL, redirect to user panel
    header("Location: panel.php");
    exit();
}

// If the user has admin role or the role is NULL, continue with the rest of the code
// Query forms associated with the user ID
$sql = "SELECT *, DATE_FORMAT(reg_date, '%d.%m.%Y') AS formatted_date  FROM tesvik WHERE user_id = '$userId'";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akademik Tesvik</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <style>
        .ms-auto {
            margin-left: auto !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- Add DataTables -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <!-- Add DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <!-- Add JSZip -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <!-- Add PDFMake -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- Add Buttons HTML5 -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <!-- Add Buttons Print -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- Add DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css">

</head>

<body>
    <?php include "Navbar.php"; ?>
    <div class="mt-5 container px-5">
        <?php
        if ($result->num_rows > 0) {
            // Output data in a table
            echo "<table id='example' class='table table-striped' style='width:100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Temel Alan</th>
                <th>Bilimsel Alan</th>
                <th>Akademik Faaliyet Türü</th>
                <th>Faaliyet</th>
                <th>Eser Adi</th>
                <th>Doi Numarası</th>
                <th>Kişi</th>
                <th>Başvuru Dönemi</th>
                <th>Teşvik Puanı</th>
                <th>Başvuru Tarihi</th>
                <th>Dosyalar</th>
                <th>Onay Durumu</th>
            </tr>
        </thead>";
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["basic_field"] . "</td>
                <td>" . $row["scientific_field"] . "</td>
                <td>" . $row["academic_activity_type"] . "</td>
                <td>" . $row["activity"] . "</td>
                <td>" . $row["work_name"] . "</td>
                <td>" . $row["doi_number"] . "</td>
                <td>" . $row["persons"] . "</td>
                <td>" . $row["submission_period"] . "</td>
                <td>" . $row["incentive_point"] . "</td>
                <td>" . $row["formatted_date"] . "</td>
                <td class='text-center'>
                    <a href='   " . $row["folder_path"] . "' target='_blank' class='btn btn-light p-1'>
                        <image src='img/image 994.svg' width='21'>
                    </a>
                </td>
                <td>";

                if (isset($row["onay_durum"])) {
                    echo $row["onay_durum"];
                } else {
                    echo "Beklemede";
                }

                echo "</td></tr>";
            }
            echo "<tfoot></tfoot>";
            echo "</table>";
        } else {
            echo "Basvuru kaydiniz bulunmamaktadir!";
        }

        // Close the database connection
        $conn->close();
        ?>

    </div>

    <!-- Modal for updating/deleting -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <!-- ... Modal iceriği ... -->
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/panel.js"></script>
    <script