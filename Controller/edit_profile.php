<?php
// Include database connection
require_once('../model/db.php.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

   
    $conn = getConnection(); 
    $query = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', gender = '$gender', role = '$role' WHERE id = $user_id";
    if (mysqli_query($conn, $query)) {
        echo "Profile updated successfully.";
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }

    
    mysqli_close($conn);
}


$user_id = $_GET['id']; 
$conn = getConnection(); 
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<form method='post' action='edit_profile.php'>";
    echo "<input type='hidden' name='user_id' value='" . $row['id'] . "'>";
    echo "Name: <input type='text' name='name' value='" . $row['name'] . "'><br>";
    echo "Email: <input type='email' name='email' value='" . $row['email'] . "'><br>";
    echo "Phone: <input type='text' name='phone' value='" . $row['phone'] . "'><br>";
    echo "Gender: <input type='text' name='gender' value='" . $row['gender'] . "'><br>";
    echo "Role: <input type='text' name='role' value='" . $row['role'] . "'><br>";
    echo "<input type='submit' value='Update Profile'>";
    echo "</form>";
} else {
    echo "User not found.";
}
mysqli_close($conn);
?>
