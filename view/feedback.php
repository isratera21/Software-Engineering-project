<?php
require_once('../controller/cookie_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <style>
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
<body>
<a href="customerDash.php">Back</a>     
<ul>
    <li><a href="cateringFeedback.php">catering feedback</a></li><br><br>
    <li><a href="securityFeedback.php">Security feedback</a></li><br><br>
    <li><a href="add_vnu_feedback.php">venue feedback</a></li><br><br>
    <li><a href="entertainment_feed.php">Entertainment feedback</a></li>
   
</ul>
</body>
</html>