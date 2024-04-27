<?php require_once('../controller/cookie_check.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Review Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            width: 70%;
            height: 150px;
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
    <div id="messageArea"></div>
    <h3>Write a Review</h3>
    <form action="../controller/secf_controller.php" method="post">
        <label for="review">Your Review:</label>
        <textarea id="review" name="review" placeholder="Write your review here..." required></textarea><br><br>
        <input type="submit" name="submit" value="Submit Review"><br><br>
    </form>
            
    <a href="view_feedback.php">View my Review</a>     

</body>

</html> 
