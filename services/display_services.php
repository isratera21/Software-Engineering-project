<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching and displaying services
$sql = "SELECT service_name, cost FROM services"; // Corrected table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["service_name"] . "</td><td>$" . $row["cost"] . "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No services found</td></tr>";
}

$conn->close();
?>
