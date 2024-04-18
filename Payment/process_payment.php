<?php
$host = 'localhost';
$dbname = 'event_management'; 
$username = 'root'; 
$password = ''; 

// Creating connection
$conn = new mysqli($host, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$payment_method = $_POST['payment_method'];
$identifier = $_POST['identifier'];
$amount = $_POST['amount']; 


$stmt = $conn->prepare("INSERT INTO payments (payment_method, identifier, amount) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $payment_method, $identifier, $amount);


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

// Closing statement 
$stmt->close();
$conn->close();
?>
