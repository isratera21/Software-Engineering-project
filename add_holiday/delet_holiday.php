<?php
// Check if the holiday ID is provided via GET parameter
if(isset($_GET['id'])) {
    // Get the holiday ID from the URL parameter
    $holiday_id = $_GET['id'];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'event_management_system');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to delete the holiday
    $sql = "DELETE FROM holiday WHERE id = $holiday_id";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Holiday deleted successfully
        echo "Holiday deleted successfully!";
    } else {
        // Error occurred while deleting the holiday
        echo "Error deleting holiday: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If holiday ID is not provided in the URL parameter
    echo "Holiday ID not specified.";
}
?>
