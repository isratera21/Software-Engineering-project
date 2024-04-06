<?php

$servername = "localhost";
$username = "root";
$password = "pnjn";
$dbname = "Artist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve available singers
$sql = "SELECT * FROM singers WHERE availability = 'Available'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form method='post' action='book_singer.php'>";
    echo "<select name='singer'>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
    }
    echo "</select>";
    echo "<input type='submit' value='Book Singer'>";
    echo "</form>";
} else {
    echo "No singers available for booking.";
}

$conn->close();
?>

