<?php
// Assuming $conn is the database connection
require_once "db.php";

$tableName = "activities";

// Handle form submission for updating or adding activities
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["update_activity"])) {
        // Process the submitted form for updating activities

        foreach ($_POST["activity_id"] as $id => $activity_id) {
            $id = intval($id);
            $description = $_POST["description"][$id];
            $academic_activity_type = $_POST["academic_activity_type"][$id];
            $point = $_POST["point"][$id];
            // Update the activity in the database
            $updateQuery = "UPDATE activities SET activity_id = '$activity_id', description = '$description', academic_activity_type = '$academic_activity_type', point = '$point' WHERE id = $id";
            $conn->query($updateQuery);
        }

        // Redirect to the settings page or perform other actions
        header("Location: activity_settings.php");
        exit();
    } elseif (isset($_POST["add_activity"])) {
        // Process the submitted form for adding a new activity

        $newActivityId = $_POST["new_activity_id"];
        $newDescription = $_POST["new_description"];
        $newPoint = $_POST["new_point"];
        $newAcademicActivityType = $_POST["new_academic_activity_type"];
        // Insert the new activity into the database
        $insertQuery = "INSERT INTO activities (academic_activity_type, activity_id, description, point) VALUES ('$newAcademicActivityType','$newActivityId', '$newDescription', '$newPoint')";
        $conn->query($insertQuery);

        // Redirect to the settings page or perform other actions
        header("Location: activity_settings.php");
        exit();
    }
}

// Fetch activities from the database
$selectQuery = "SELECT * FROM activities";
$result = $conn->query($selectQuery);

$activities = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $activities[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Settings Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            justify-content: center;
            align-items: center;
        }


        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ac103d;
            color: #fff;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ac103d;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #780b2a;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 5px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <?php include "NavbarAdmin.php"; ?>
    <div class="container mt-5">
        <h2>Akademik Faaliyetler</h2>
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <th>Akademik Faaliyet Turu</th>
                        <th>Faaliyet Id</th>
                        <th>Faaliyet</th>
                        <th>Değer</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $activity) : ?>
                        <tr>
                            <td>
                                <input type="text" name="academic_activity_type[<?php echo $activity['id']; ?>]" value="<?php echo $activity['academic_activity_type']; ?>" required>
                            </td>
                            <td>
                                <input type="text" name="activity_id[<?php echo $activity['id']; ?>]" value="<?php echo $activity['activity_id']; ?>" required>

                            </td>
                            <td>
                                <textarea name="description[<?php echo $activity['id']; ?>]" required><?php echo $activity['description']; ?></textarea>
                            </td>
                            <td>
                                <textarea name="point[<?php echo $activity['id']; ?>]" required><?php echo $activity['point']; ?></textarea>
                            </td>
                            <td>
                                <button type="submit" name="update_activity[<?php echo $activity['id']; ?>]">
                                    Güncelle
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </form>
    </div>
    <div class="container mt-5">
        <form action="" method="post">
            <h2>Yeni Faaliyet Ekle</h2>
            <div>
                <label for="new_academic_activity_type">Yeni Akademik Faaliyet Türü:</label>
                <input type="text" name="new_academic_activity_type" required>
                <label for="new_activity_id">Yeni Faaliyet Id:</label>
                <input type="text" name="new_activity_id" required>

                <label for="new_description">Yeni Faaliyet Adi:</label>
                <textarea name="new_description" required></textarea>
                <label for="new_point">Yeni Faaliyet Değeri:</label>
                <input type="text" name="new_point" required>
            </div>
            <div class="container mt-5 modal-footer justify-content-center">
                <button type="submit" name="add_activity">Faaliyet Ekle</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>