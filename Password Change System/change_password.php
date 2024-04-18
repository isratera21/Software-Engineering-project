<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "event_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get form data
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];


echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Password Changed</title>
    <style>
        body {
            background-color: #fffacd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h2 {
            font-weight: bold;
            color: #000;
        }
    </style>
</head>
<body>
    <h2>Password Changed!</h2>
</body>
</html>";

$conn->close();
?>
