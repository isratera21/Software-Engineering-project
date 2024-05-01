<?php
require_once('../controller/cookie_check.php');
require_once('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Venue feedback</h1>
    <form action="../controller/vnufb_controller.php" method="post" class="venue-form">
        <input type="text" name="parking" placeholder="parking" required>
        <input type="text" name="atmosphere" placeholder="atmosphere" required>
        <input type="text" name="spacious" placeholder="spacious" required>
        <input type="int" name="rating" placeholder="rating" required>
        <button type="submit">Add Venue_feedback</button>
    </form>
    <li><a href="view_venue_feedback.php">venue feedback</a></li><br><br>
</body>
</html>