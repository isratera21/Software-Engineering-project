<?php
require_once('../model/db.php');
require_once('../model/pass_checkModel.php');
require_once('sessionCheck.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_SESSION['username']);
    $currentPass = trim($_POST['currentPass']);
    $newPass = trim($_POST['newPass']);
    $retypedPass = trim($_POST['retypedPass']);

    // You should add more validation and error handling here

    // Verify the current password
    $con = getConnection();
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $storedPassword = $row['password'];

        echo "Current Password: $currentPass<br>";
        echo "Stored Password: $storedPassword<br>";

        // Verify the current password
        if ($currentPass==$storedPassword) {

            if (changePass($newPass,$username)) {
                echo "Password changed successfully.";
            } else {
                echo "Error updating password: " . mysqli_error($con);
            }
        } else {
            echo "Incorrect current password.";
        }
    } else {
        echo "User not found.";
    }

    mysqli_close($con);
}
?>