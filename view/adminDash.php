<?php
require_once('../controller/cookie_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        h3 {
            
            margin-left: 20px;
            
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
  
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="addHoliday.php">Add Holiday</a></li>
        <li><a href="viewHoliday.php">View Holidays</a></li><br><br>
        <li><a href="addService.php">Add Service</a></li>
        <li><a href="viewServices.php">View Service</a></li><br><br>
        <li><a href="add_venue.php">Add venue</a></li>
        <li><a href="venue_list.php">Venue_list</a></li><br><br>
        <li><a href="viewBookedEvent.php">View Booked Event</a></li><br><br>
        <li><a href="create_announcement.php">Create Announcement</a></li>
        <li><a href="announcements_adminview.php">View Announcements</a></li><br><br>
        <li><a href="conversation.php">Conversation</a></li><br><br>
        <li><a href="viewAllReview.php">View Reviews</a></li><br><br>
        <li><a href="myProAdmin.php">View Profile</a><li>
        <li><a href="../controller/logout.php">Logout</a></li>


    </ul>
</body>
</html>
