<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Holiday</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="date"],
        input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .success {
            color: green;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Add Holiday</h2>
    <form action="add_holiday.php" method="post">
        <label for="holiday_date">Holiday Date:</label>
        <input type="date" id="holiday_date" name="holiday_date" required>
        <br>
        <label for="holiday_reason">Holiday Reason:</label>
        <input type="text" id="holiday_reason" name="holiday_reason" required>
        <br>
        <button type="submit">Add Holiday</button>
    </form>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $date = $_POST['holiday_date'];
        $reason = $_POST['holiday_reason'];

        // Connect to the database
        $conn = new mysqli('localhost', 'root', '', 'event_management_system');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the holiday already exists in the database
        $sql = "SELECT * FROM holiday WHERE date = '$date'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // If the holiday already exists, display an error message
            echo "<p class='error'>This date already exists in the holiday list.</p>";
        } else {
            // Insert holiday into the database
            $sql = "INSERT INTO holiday (date, reason) VALUES ('$date', '$reason')";
            if ($conn->query($sql) === TRUE) {
                // If the holiday is added successfully, display a success message
                echo "<p class='success'>Holiday added successfully!</p>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>

