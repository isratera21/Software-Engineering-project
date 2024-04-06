
<?php

require_once('../model/db.php');

if (isset($_GET['id'])) {
    $announcement_id = $_GET['id'];

    $conn = getConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE announcements SET is_read = 1 WHERE id = $announcement_id";
    if ($conn->query($sql) === TRUE) {
        header('location:../view/announcements.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>