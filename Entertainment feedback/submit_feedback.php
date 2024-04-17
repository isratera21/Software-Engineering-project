<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$satisfied = $_POST['satisfied'];
$inconvenience = $_POST['inconvenience'];
$suggestion = $_POST['suggestion'];

$sql = "INSERT INTO feedback (satisfied, inconvenience, suggestion)
VALUES ('$satisfied', '$inconvenience', '$suggestion')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Thank you for your feedback!</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
