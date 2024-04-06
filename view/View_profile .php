<?php

require_once('../model/db.php');

$user_id = $_GET['id']; // Assuming you pass the user id via URL
$conn = getConnection(); // Get database connection
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Display user profile data
    echo "Name: " . $row['name'] . "<br>";
    echo "Username: " . $row['username'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Phone: " . $row['phone'] . "<br>";
    echo "Gender: " . $row['gender'] . "<br>";
    echo "Role: " . $row['role'] . "<br>";
} else {
    echo "User not found.";
}

// Close database connection
mysqli_close($conn);
?>
