<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center; /* Center-align the title */
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th.blue-header {
            background-color: blue;
            color: white; /* White text color for better visibility */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .delete-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .confirm-dialog {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        .confirm-dialog h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .confirm-buttons {
            margin-top: 20px;
            text-align: center;
        }

        .confirm-buttons button {
            margin: 0 10px;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .confirm-buttons button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Holiday List</h2>
    <?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'event_management_system');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the holiday ID is provided via GET parameter
    if(isset($_GET['id'])) {
        // Get the holiday ID from the URL parameter
        $holiday_id = $_GET['id'];

        // Prepare SQL statement to delete the holiday
        $sql = "DELETE FROM holiday WHERE id = $holiday_id";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            // Holiday deleted successfully
            echo "Holiday deleted successfully!";
        } else {
            // Error occurred while deleting the holiday
            echo "Error deleting holiday: " . $conn->error;
        }
    }

    // Query to retrieve holidays
    $sql = "SELECT * FROM holiday";
    $result = $conn->query($sql);

    // Check if there are any holidays
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Date</th><th>Reason</th><th>Action</th></tr>";
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["date"] . "</td>";
            echo "<td>" . $row["reason"] . "</td>";
            echo "<td><button class='delete-btn' onclick='showConfirmDialog(" . $row['id'] . ")'>Delete</button></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No holidays found.";
    }

    // Close connection
    $conn->close();
    ?>

    <!-- Confirmation Dialog -->
    <div id="confirmDialog" class="confirm-dialog">
        <h3>Are you sure?</h3>
        <div class="confirm-buttons">
            <button onclick="deleteHoliday()">Yes</button>
            <button onclick="hideConfirmDialog()">No</button>
        </div>
    </div>

    <script>
        function showConfirmDialog(id) {
            var dialog = document.getElementById('confirmDialog');
            dialog.dataset.id = id;
            dialog.style.display = 'block';
        }

        function hideConfirmDialog() {
            document.getElementById('confirmDialog').style.display = 'none';
        }

        function deleteHoliday() {
            var id = document.getElementById('confirmDialog').dataset.id;
            window.location.href =  'http://localhost/event management system/holiday_list.php?id=' + id;
        }
    </script>
</body>
</html>
    