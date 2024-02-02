<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function calculateCofficient($persons)
{
    require "db.php";
    // Check if the katsayi table exists

    // Fetch coefficient values from the database
    $sql = "SELECT value FROM katsayi WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $coefficients = [1, 0.6, 0.4, 0.3]; // Default coefficients

    if ($stmt) {
        for ($i = 1; $i <= 4; $i++) {
            $stmt->bind_param("i", $i);
            $stmt->execute();
            $stmt->bind_result($value);
            $stmt->fetch();
            $coefficients[$i - 1] = $value;
        }
        $stmt->close();
    }


    switch ($persons) {
        case "1":
            return $coefficients[0];
        case "2":
            return $coefficients[1];
        case "3":
            return $coefficients[2];
        case "4":
            return $coefficients[3];
        default:
            return 1 / $persons;
    }
}

function calculateIncentivePoint($point, $coefficient)
{
    return $point * $coefficient;
}
require "db.php";

// Check if the table exists
$table_name = "tesvik"; // Replace with your table name
$table_check_query = "SHOW TABLES LIKE '$table_name'";
$table_result = $conn->query($table_check_query);

if ($table_result->num_rows == 0) {
    // Table does not exist, create it
    $sql = "CREATE TABLE $table_name (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        surname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        title VARCHAR(50),
        faculty VARCHAR(50),
        department VARCHAR(50),
        basic_field VARCHAR(50),
        scientific_field VARCHAR(50),
        academic_activity_type VARCHAR(50),
        activity VARCHAR(100),
        work_name VARCHAR(100),
        doi_number VARCHAR(100),
        persons INT(3),
        coefficient DECIMAL(10,2),
        incentive_point DECIMAL(10,2),
        user_id INT(11),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        folder_uuid VARCHAR(100),
        folder_path VARCHAR(255),
        total_size INT(11),
        onay_durum VARCHAR(10),
        submission_period VARCHAR(100)
    )";


    // Execute the query to create table
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $title = $_POST["title"];
        $faculty = $_POST["faculty"];
        $department = $_POST["department"];
        $basic_field = $_POST["basic_field"];
        $scientific_field = $_POST["scientific_field"];
        $academic_activity_type = $_POST["academic_activity_type"];
        $activity = $_POST["activity_id"];
        $work_name = $_POST["work_name"];
        $doi_number = $_POST["doi_number"];
        $persons = $_POST["persons"];
        $submission_period = $_POST["submission_period"];
        $point = $_POST["point"];
        // katsayisinin hesaplanmasi
        $coefficient = calculateCofficient($persons);

        // Tesvik puani hesaplama
        $incentive_point = calculateIncentivePoint((float)$point, $coefficient);

        // SQL query to insert data into the table
        $insert_query = "INSERT INTO $table_name (name, surname, email, title, faculty, department, basic_field, scientific_field, academic_activity_type, activity, work_name, doi_number, persons, submission_period, coefficient, user_id, incentive_point) VALUES ('$name', '$surname', '$email', '$title', '$faculty', '$department', '$basic_field', '$scientific_field', '$academic_activity_type', '$activity', '$work_name', '$doi_number', '$persons', '$submission_period', '$coefficient', '$userId', '$incentive_point')";

        if ($conn->query($insert_query) === TRUE) {
            // echo "Data inserted successfully";
            // Dosya yukleme islemini yonetmek
            try {
                if (isset($_FILES['file_upload'])) {

                    $file = $_FILES['file_upload'];

                    // File details
                    $fileName = $file['name'][0];
                    $fileTmpName = $file['tmp_name'][0];
                    $fileSize = $file['size'][0];
                    $fileError = $file['error'][0];

                    // File extension
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

                    // Allowed file types
                    $allowed = array('pdf'); // Add allowed file types here

                    if (in_array($fileExt, $allowed)) {
                        if ($fileError === 0) {
                            $fileDestination = 'files/' . $userId . '_' . $fileName; // Destination directory
                            try {
                                if (!move_uploaded_file($fileTmpName, $fileDestination)) {
                                    throw new Exception('Failed to move uploaded file.');
                                }
                            } catch (Exception $e) {
                                echo 'Caught exception: ',  $e->getMessage(), "\n";
                            }
                            echo "File uploaded successfully.";

                            // Save file path in the database
                            $filePathInDatabase = $fileDestination;
                            // $sql = "INSERT INTO files (file_path) VALUES ('$filePathInDatabase')";
                            // Insert folder properties into the database
                            $insert_query = "UPDATE tesvik  SET folder_uuid = '$userId', folder_path = '$filePathInDatabase', total_size = '$fileSize' WHERE id = LAST_INSERT_ID()";

                            if ($conn->query($insert_query) === TRUE) {
                                header("Location: user_panel.php");
                            } else {
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        } else {
                            echo "There was an error uploading your file.";
                        }
                    } else {
                        echo "You cannot upload files of this type.";
                    }
                }
            } catch (Exception $e) {
                $exception_message = 'Caught exception: ' . $e->getMessage();
                echo $exception_message;
                error_log($exception_message);
            }
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    } else {
        echo "User ID not found in session.";
    }
}

$conn->close();
