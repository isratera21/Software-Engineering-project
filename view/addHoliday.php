<?php
require_once('../controller/cookie_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Holiday</title>
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
        h1 {
            color: #333;
            margin-top: 20px;
            text-align: center;
        }

        form {
            text-align: center;
        }

        input[type="date"],
        input[type="text"] {
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
            color: #007bff;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        input[type="submit"]:hover {
            color: #f7f7f7;
            background-color: #1977ad;
        }
    </style>
</head>
<body>
    <h3><a href="adminDash.php">Back</a></h3>
    <h1>Add Holiday</h1>
    <form action="../controller/addHolidayCheck.php" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="">
        Date:   <input type="date" name="date" id="date" value="" ><br>
        Reason: <input type="text" name="reason" id="reason" value="" ><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var date = document.getElementById("date").value;
            var reason = document.getElementById("reason").value;

            if (date === "") {
                alert("Please enter a date.");
                return false;
            }

            if (reason === "") {
                alert("Please enter a reason.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
