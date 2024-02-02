<?php
// Database connection details
require_once "db.php";

// Fetch data from the database
$sql = "SELECT * FROM tesvik"; // Replace 'your_table' with your actual table name
$result = $conn->query($sql);

ob_start(); // Start output buffering
if ($result->num_rows > 0) {
    // Output data in a table
    echo "<table id='example' class='table table-striped' style='width:100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Akademik Faaliyet Turu</th>
                <th>Faaliyet</th>
                <th>Kisi</th>
                <th>Tesvik Puani</th>
                <!-- Add more columns based on your table structure -->
            </tr>
        </thead>";
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["surname"] . "</td>
                <td>" . $row["academic_activity_type"] . "</td>
                <td>" . $row["activity"] . "</td>
                <td>" . $row["persons"] . "</td>
                <td>" . $row["incentive_point"] . "</td>
                <!-- Add more columns based on your table structure -->
              </tr>";
    }
    echo "<tfoot></tfoot>";
    echo "</table>";
} else {
    echo "No data available";
}

$tableContent = ob_get_clean(); // Get the buffered output and clear the buffer

// Output the HTML table content
echo $tableContent;

// Close the database connection
$conn->close();
