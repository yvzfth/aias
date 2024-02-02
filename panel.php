<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    require_once "db_connection.php";

    // Retrieve user details based on user_id stored in the session
    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = '$userId'";
    $result = $conn->query($sql);
    $user = null;
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Check if the user has the necessary role to access the admin panel
        if ($user['role'] != 1) {
            // If user does not have the admin role, redirect to another page or perform other actions
            header("Location: user_panel.php");
            exit();
        }
    }
} else {
    // If user is not logged in, redirect to the signin page or perform other actions
    header("Location: signin.php");
    exit();
}
?>
<?php
// Database connection details
require_once "db.php";

// Fetch data from the database
$sql = "SELECT *, DATE_FORMAT(reg_date, '%d.%m.%Y') AS formatted_date FROM tesvik"; // Extract date only from reg_date column
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">


    <title>Akademik Tesvik</title>

    <link rel="stylesheet" href="css/main.css">

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
    <?php include "NavbarAdmin.php"; ?>

    <div class="mt-5 container px-5">

        <?php
        if ($result->num_rows > 0) {
            // Output data in a table
            echo "<table id='example' class='table table-striped' style='width:100%'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Unvan</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Fakülte</th>
                    <th>Departman</th>
                    <th>Temel Alan</th>
                    <th>Bilimsel Alan</th>
                    <th>Akademik Faaliyet Türü</th>
                    <th>Faaliyet</th>
                    <th>Eser Adi</th>
                    <th>Doi Numarasi</th>
                    <th>Kişi</th>
                    <th>Basvuru Dönemi</th>
                    <th>Teşvik Puanı</th>
                    <th>Başvuru Tarihi</th>
                    <th>Klasör</th>
                    <th>Onay Durum</th>
                </tr>
            </thead>";
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["title"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["surname"] . "</td>
                <td>" . $row["faculty"] . "</td>
                <td>" . $row["department"] . "</td>
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
                    <a href='" . $row["folder_path"] . "' target='_blank' class='btn btn-light p-1'>
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

            echo "</tbody><tfoot></tfoot></table>";
        } else {
            echo "Basvuru kaydiniz bulunmamaktadir!";
        }

        // Veritabani baglantisini kapat
        $conn->close();
        ?>


    </div>


    <!-- Modal for updating/deleting -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update/Delete Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Form fields to update data -->
                    <form id="updateForm">
                        <!-- Input fields to update values -->
                        <input type="hidden" id="rowId">
                        <label for="title">Title:</label>
                        <input type="text" id="title" class="form-control">

                        <label for="name">Name:</label>
                        <input type="text" id="name" class="form-control" required>

                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" class="form-control" required>

                        <label for="faculty">Faculty:</label>
                        <input type="text" id="faculty" class="form-control" required>


                        <!-- Add input fields for other columns -->

                        <label for="department">Department:</label>
                        <input type="text" id="department" class="form-control">

                        <label for="basic_field">Basic Field:</label>
                        <input type="text" id="basic_field" class="form-control">

                        <label for="scientific_field">Scientific Field:</label>
                        <input type="text" id="scientific_field" class="form-control">

                        <label for="academic_activity_type">Academic Activity Type:</label>
                        <input type="text" id="academic_activity_type" class="form-control">

                        <label for="activity">Activity:</label>
                        <input type="text" id="activity" class="form-control">

                        <label for="work_name">Work Name:</label>
                        <input type="text" id="work_name" class="form-control">

                        <label for="doi_number">Doi Number:</label>
                        <input type="text" id="doi_number" class="form-control">
                        <!-- Buttons to update or delete -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-danger" id="printBtn">Yazdır</button>
                            <button type="submit" class="btn btn-primary" id="updateBtn">Güncelle</button>
                            <button type="button" class="btn btn-danger" id="deleteBtn">Sil</button>
                            <button type="submit" class="btn btn-success" id="approveBtn">Onayla</button>
                            <button type="submit" class="btn btn-danger" id="rejectBtn">Reddet</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script> -->
    <script src="js/panel.js"></script>

    <script>
        $('#example tbody').on('click', 'tr', function() {
            // Get the data from the clicked row
            var rowData = $('#example').DataTable().row(this).data();
            if (rowData) {
                // Populate modal with row data
                $('#rowId').val(rowData[0]);
                $('#title').val(rowData[1]);
                $('#name').val(rowData[2]);
                $('#surname').val(rowData[3]);
                $('#faculty').val(rowData[4]);
                $('#department').val(rowData[5]);
                $('#basic_field').val(rowData[6]);
                $('#scientific_field').val(rowData[7]);
                $('#academic_activity_type').val(rowData[8]);
                $('#activity').val(rowData[9]);
                $('#work_name').val(rowData[10]);
                $('#doi_number').val(rowData[11]);
                $('#submission_period').val(rowData[12]);

                // Show the modal
                $('#updateModal').modal({
                    "backdrop": "static",
                    "show": true
                });
            }
        });

        $('.btn-close').on('click', function() {
            // Get the data from the clicked row

            $('#updateModal').modal('hide');

        });


        // Function to handle delete button click
        $('#deleteBtn').on('click', function() {
            var rowId = $('#rowId').val(); // Get row ID from the hidden field
            // Send AJAX request to delete the row
            $.ajax({
                url: 'delete_row.php', // Replace with your PHP script to handle deletion
                method: 'POST',
                data: {
                    id: rowId
                },
                success: function(response) {
                    // Refresh the page or update the table after deletion
                    // $('#example').html(response); // Update the table content
                    $('#updateModal').modal('hide');
                    setTimeout(function() {
                        location.reload(); // Reload the page for simplicity, you can update the table via AJAX too
                    }, 500);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });
        });

        // Function to handle form submission for updating data
        $('#updateBtn').on('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            var rowId = $('#rowId').val();
            var rowName = $("#name").val();
            var rowSurname = $("#surname").val();
            var rowTitle = $("#title").val();
            var rowFaculty = $("#faculty").val();
            var rowDepartment = $("#department").val();
            var rowBasicField = $("#basic_field").val();
            var rowScientificField = $("#scientific_field").val();
            var rowAcademicActivityType = $("#academic_activity_type").val();
            var rowActivity = $("#activity").val();
            var rowWorkName = $("#work_name").val();
            var rowDoiNumber = $("#doi_number").val();
            var rowSubmissionPeriod = $("#submission_period").val();

            $.ajax({
                url: 'update_row.php', // Replace with your PHP script to handle update
                method: 'POST',
                data: {
                    id: rowId,
                    name: rowName,
                    surname: rowSurname,
                    title: rowTitle,
                    faculty: rowFaculty,
                    department: rowDepartment,
                    basic_field: rowBasicField,
                    scientific_field: rowScientificField,
                    academic_activity_type: rowAcademicActivityType,
                    activity: rowActivity,
                    work_name: rowWorkName,
                    doi_number: rowDoiNumber,
                    submission_period: rowSubmissionPeriod
                    // Add more fields as needed
                },
                success: function(response) {
                    // Handle success (e.g., close modal, refresh table)
                    $('#updateModal').modal('hide'); // Hide the modal after update
                    setTimeout(function() {
                        location.reload(); // Reload the page for simplicity; update the table via AJAX too if needed
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });
        });

        $('#approveBtn').on('click', function() {
            var rowId = $('#rowId').val(); // Secili satirin ID'sini alin
            $.ajax({
                url: 'approve_row.php',
                method: 'POST',
                data: {
                    id: rowId
                },
                success: function(response) {
                    console.log(response); // İslem basariliysa konsola goster
                    // İslem basarili oldugunda gerekli islemleri yapabilirsiniz, ornegin bir mesaj gosterebilirsiniz.
                    updateContent(); // İcerigi guncellemek icin bu fonksiyonu cagirin
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });
        });

        $('#rejectBtn').on('click', function() {
            var rowId = $('#rowId').val(); // Secili satirin ID'sini alin
            $.ajax({
                url: 'reject_row.php',
                method: 'POST',
                data: {
                    id: rowId
                },
                success: function(response) {
                    console.log(response); // İslem basariliysa konsola goster
                    // İslem basarili oldugunda gerekli islemleri yapabilirsiniz, ornegin bir mesaj gosterebilirsiniz.
                    updateContent(); // İcerigi guncellemek icin bu fonksiyonu cagirin
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });
        });
        $('#printBtn').on('click', function(event) {
            event.preventDefault(); // Prevent default form submission
            var rowId = $('#rowId').val();
            var rowName = $("#name").val();
            var rowSurname = $("#surname").val();
            var rowTitle = $("#title").val();
            var rowFaculty = $("#faculty").val();
            var rowDepartment = $("#department").val();
            var rowBasicField = $("#basic_field").val();
            var rowScientificField = $("#scientific_field").val();
            var rowAcademicActivityType = $("#academic_activity_type").val();
            var rowActivity = $("#activity").val();
            var rowWorkName = $("#work_name").val();
            var rowDoiNumber = $("#doi_number").val();
            var rowPersons = $("#persons").val();
            var rowSubmissionPeriod = $("#submission_period").val();

            $.ajax({
                url: 'b2_form.php', // Redirect to b2_form.php
                method: 'POST',
                data: {
                    id: rowId,
                    name: rowName,
                    surname: rowSurname,
                    title: rowTitle,
                    faculty: rowFaculty,
                    department: rowDepartment,
                    basic_field: rowBasicField,
                    scientific_field: rowScientificField,
                    academic_activity_type: rowAcademicActivityType,
                    activity: rowActivity,
                    work_name: rowWorkName,
                    doi_number: rowDoiNumber,
                    persons: rowPersons,
                    submission_period: rowSubmissionPeriod,
                },
                success: function(response) {
                    setTimeout(function() {
                        window.location.href = 'b2_form.php?id=' + rowId + '&name=' + rowName + '&surname=' + rowSurname + '&title=' + rowTitle + '&faculty=' + rowFaculty + '&department=' + rowDepartment + '&basic_field=' + rowBasicField + '&scientific_field=' + rowScientificField + '&academic_activity_type=' + rowAcademicActivityType + '&activity=' + rowActivity + '&work_name=' + rowWorkName + '&doi_number=' + rowDoiNumber + '&persons=' + rowPersons + '&submission_period=' + rowSubmissionPeriod;
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
        // İcerigi guncellemek icin AJAX ile veri alin
        function updateContent() {
            $.ajax({
                url: 'update_row.php', // Verileri guncelleyecek olan PHP dosyasinin adi ve yolu
                method: 'GET', // GET veya POST istegi olarak ayarlayin, uygun sekilde duzenleyin
                success: function(data) {
                    // Yeni verilerle icerigi guncelleyin
                    $('#contentDiv').html(data); // Guncellenecek icerigin bulundugu elemanin ID'sini secin
                },
                error: function(xhr, status, error) {
                    console.error(error);
                },
            });
        }
    </script>
</body>

</html>