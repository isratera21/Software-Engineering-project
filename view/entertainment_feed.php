<?php
require_once('../controller/cookie_check.php');
require_once('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment Feedback</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('back.jpg') no-repeat center center fixed;
            background-size: cover;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            margin-left: 20px;
            margin-top: 10px;
            color: #007bff;
            transition: color 0.3s ease;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }
        a:hover {
            color: #fff;
            background-color: #007bff;
        }
        h3 {
            color: #007bff;
            margin-top: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #007bff;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }

        textarea {
            width: 30%;
            height: 50px;
            margin-bottom: 20px;
            padding: 10px;
            border: 3px solid #007bff;
            border-radius: 5px;
            resize: none; 
            font-family: Arial, sans-serif; 
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    
        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <a href="feedback.php">Back</a>
    <h2 align='center'>Your Thoughts On Today's Entertainment Segment?</h2>
    <div class="feedback-container" >
        <form action="../controller/entf_controller.php" method="POST">
            <label for="review">Did the entertainment segment satisfy you?</label><br>
            <textarea name="satisfied"></textarea><br>
            <label for="review">Was there any inconvenience that you faced?</label><br>
            <textarea name="inconvenience"></textarea><br>
            <label for="review">Would you like to leave a suggestion so that our next event can do better?</label><br>
            <textarea name="suggestion"></textarea><br>
            <input type="submit" name="submit" value="Submit Review"><br>
        </form>
    </div>
    <a href="view_enter_feed.php">View My Entertainment feedback</a>
</body>
</html>
