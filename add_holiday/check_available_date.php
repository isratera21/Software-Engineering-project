<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'event_management_system');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for booking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $date = $_POST['event_date'];
    $reason = $_POST['event_reason'];

    // Check if the selected date is a holiday
    $holiday_check_sql = "SELECT * FROM holiday WHERE date = '$date'";
    $holiday_check_result = $conn->query($holiday_check_sql);

    if ($holiday_check_result->num_rows > 0) {
        // If the selected date is a holiday, display an error message
        echo "<p style='color: red;'>The selected date is a holiday. Please choose another date.</p>";
    } else {
        // Proceed with the booking process
        // Your booking process code goes here
        // Redirect or display another page for successful booking
        // For example:
        header("Location: booking_success.php");
        exit(); // Ensure that no further code is executed
    }
}


