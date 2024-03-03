<?php
// Delete a venue from the database
include 'db_connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM venuelist WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: venue_list.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
