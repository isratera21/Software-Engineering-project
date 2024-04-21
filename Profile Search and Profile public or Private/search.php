<?php
include 'db.php';

$search = $_POST['search'] ?? '';

if ($search) {
    $sql = "SELECT * FROM users WHERE username LIKE ? AND profile_visibility = 'public'";
    $stmt = $conn->prepare($sql);
    $searchParam = "%" . $search . "%";
    $stmt->bind_param("s", $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
}
$conn->close();
?>
