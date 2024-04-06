<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Availability</title>
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
        form {
            text-align: center;
        }

        input[type="date"] {
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

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h3><a href="customerDash.php">Back</a></h3>
    <h1>Add Event Date</h1>
    <form action="../controller/eventAvailabilityCheck.php" method="post" onsubmit="return validateForm()">
        Event Date:<input type="date" name="date" id="date" value="" ><br>
        <span id="dateError" class="error-message"></span><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var date = document.getElementById("date").value;
            var dateError = document.getElementById("dateError");

            dateError.innerHTML = "";

            if (date === "") {
                dateError.innerHTML = "Please enter a date.";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
