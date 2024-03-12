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

// Add service
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_name = $_POST["service_name"];
    $cost = $_POST["cost"];

    // Escape and quote the $cost variable
    $cost = $conn->real_escape_string($cost);
    $sql = "INSERT INTO service (name, cost) VALUES ('$service_name', '$cost')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to services list page
        header("Location: services_list.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
