<?php
// Fetch venues from the database and display them in the table
include 'db_connection.php';

$sql = "SELECT * FROM  venuelist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['location']}</td>";
        echo "<td><a href='delete_venue.php?id={$row['id']}'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No venues found.</td></tr>";
}

$conn->close();
?>
