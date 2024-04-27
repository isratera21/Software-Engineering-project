<?php
require_once("../model/db.php");

// Create connection
$conn = getConnection();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$payment_method = $_POST['payment_method'];
$identifier = $_POST['identifier'];
$amount = $_POST['amount']; // New field for the amount

// Prepare SQL Statement
$stmt = $conn->prepare("INSERT INTO payments (payment_method, identifier, amount) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $payment_method, $identifier, $amount);

// Execute the statement and check for errors
if ($stmt->execute()) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Payment Success</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Payment successful</h1>
        </div>
    </body>
    </html>";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
