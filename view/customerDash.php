<?php
require_once('../controller/cookie_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            margin-top: 20px;
            text-align: center;
        }
        h3{
            margin-left: 20px;
        }
        .notification {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: #4CAF50; 
            color: white; 
            padding: 10px;
            border-radius: 5px;
        }


        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
            display: inline-block;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }

        a:hover {
            color: #f7f7f7;
            background-color: #1977ad;
        }
    </style>
</head>
<body>
    <?php
    require_once('../model/announcementModel.php');
    $unread_count = getUnreadAnnouncementCount();
    ?>
    <h1>Customer Dashboard</h1>
    <?php
        if ($unread_count > 0) {
            echo "<p class='notification'>You have $unread_count new announcement(s).</p>";
        }       
        else {
            echo "<p class='notification'>You have 0 new announcements.</p>";
        }
?>
    <ul>
        <li><a href="event_calendar.php">Event Calendar</a></li><br><br>   
        <li><a href="service_customerView.php">View service List</a></li>
        <li><a href="venue_list.php">Venue List</a></li>
        <li><a href="choose_artist.php">Artist</a></li><br><br>
        <li><a href="feedback.php">Feedback</a></li><br><br>
        <li><a href="eventAvailability.php">Add Event</a></li>
        <li><a href="payment.php">payment</a></li>
        <li><a href="event_customer_view.php">Event List</a></li><br><br>
        <li><a href="announcements.php">announcements</a></li><br><br>
        <li><a href="conversation.php">Conversation</a></li><br><br>
        <li><a href="myProCus.php">View Profile</a><li>
        <li><a href="change_password.php">change password</a><li>   
        <li><a href="../controller/logout.php">Logout</a></li><br>

        

    </ul>
</body>
</html>
