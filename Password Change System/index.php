<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #fffacd;">
    <div class="container">
        <form action="change_password.php" method="post">
            <h2>Change Password</h2>
            <label for="current_password">Current Password:</label>
            <input type="password" id="current_password" name="current_password" required><br><br>
            <label for="new_password">New Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <label for="confirm_password">Re-enter New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br><br>
            <button type="submit" style="background-color: #008000; color: #fff;">Change Password</button>
        </form>
    </div>
</body>
</html>
