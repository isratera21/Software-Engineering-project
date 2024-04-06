<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "pnjn";
$dbname = "Artist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected singer ID from the form
$singer_id = $_POST['singer'];

// Update the singer's availability to 'Booked'
$sql = "UPDATE singers SET availability = 'Booked' WHERE id = $singer_id";

if ($conn->query($sql) === TRUE) {
    echo "Singer booked successfully!";
} else {
    echo "Error booking singer: " . $conn->error();

}

$conn->close();

?>

