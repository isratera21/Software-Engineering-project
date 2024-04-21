<?php
include 'db.php';

$user_id = $_POST['user_id'] ?? 0;
$new_visibility = $_POST['new_visibility'] ?? 'public';

$sql = "UPDATE users SET profile_visibility = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $new_visibility, $user_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Visibility updated successfully.";
} else {
    echo "No changes made or user not found.";
}

$conn->close();
?>
