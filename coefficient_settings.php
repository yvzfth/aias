<?php
// Connect to your database
require_once "db.php";

$tableCheckQuery = "SHOW TABLES LIKE 'katsayi'";
$tableResult = $conn->query($tableCheckQuery);
if ($tableResult->num_rows == 0) {
    // Table does not exist, create it
    $createTableQuery = "CREATE TABLE katsayi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    value DECIMAL(10, 2)
)";
    if ($conn->query($createTableQuery) === TRUE) {
        // Table created successfully, insert values
        $insertValuesQuery = "INSERT INTO katsayi (value) VALUES (1), (0.6), (0.4), (0.3)";
        if ($conn->query($insertValuesQuery) === TRUE) {
            echo "Values inserted into katsayi table successfully.";
        } else {
            echo "Error inserting values: " . $conn->error;
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Fetch coefficient values from the database
$sql = "SELECT * FROM katsayi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $coefficients = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "No coefficients found.";
}

// Update coefficients when form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($_POST['coefficients'] as $id => $value) {
        $value = floatval($value);
        $updateSql = "UPDATE katsayi SET value = $value WHERE id = $id";
        $conn->query($updateSql);
    }
    // Redirect to settings page to reflect changes
    header("Location: panel.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Coefficient Settings</title>
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

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 30%;
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

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
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
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <?php include "NavbarAdmin.php"; ?>
    <div class="mt-5 container">
        <h1>Katsayı Ayarları</h1>
        <form method="post">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Katsayı Değeri</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($coefficients as $coefficient) : ?>
                        <tr>
                            <td><?php echo $coefficient['id']; ?></td>
                            <td>
                                <input type="number" step="0.01" name="coefficients[<?php echo $coefficient['id']; ?>]" value="<?php echo $coefficient['value']; ?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="modal-footer justify-content-center">
                <button type="submit">Kaydet</button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>