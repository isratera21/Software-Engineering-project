<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue List</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    thead {
        background-color: #007bff;
        color: #fff;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #ddd;
    }

    a {
        text-decoration: none;
        color: #007bff;
        padding: 5px 10px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    a:hover {
        background-color: #0056b3;
        color: #fff;
    }
 </style>
</head>
<body>
    <h1>Venue List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>venue_Name</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../model/db.php');
            $conn = getConnection();
            $sql = "SELECT * FROM vnu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["location"]."</td>";
					echo "<td>
					<a href='../controller/fetch_venue.php?id=".$row["id"]."'>edit</a>
					<a href='../controller/delete_venue.php?id=".$row["id"]."'>Delete</a>
				       </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No venues found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
