<?php
require_once('../model/db.php');

$conn = getConnection();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$singer_id = $_POST['singer'];


$sql = "UPDATE singers SET availability = 'Booked' WHERE id = $singer_id";

if ($conn->query($sql) === TRUE) {
    echo "Singer booked successfully!";
} else {
    echo "Error booking singer: " . $conn->error();

}

$conn->close();

?>

