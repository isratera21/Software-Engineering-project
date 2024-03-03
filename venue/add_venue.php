<?php
// Add a new venue to the database
include 'db_connection.php';

$name = $_POST['name'];
$location = $_POST['location'];

$sql = "INSERT INTO venuelist (name, location) VALUES ('$name', '$location')";

if ($conn->query($sql) === TRUE) {
    header("Location: venue_list.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
