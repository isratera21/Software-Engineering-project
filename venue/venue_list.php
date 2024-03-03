<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Venue List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include database connection
            include 'db_connection.php';

            // Fetch venues from database
            $sql = "SELECT * FROM venuelist";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["location"]."</td>";
                    echo "<td><a href='delete_venue.php?id=".$row["id"]."'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No venues found</td></tr>";
            }

            // Close database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
