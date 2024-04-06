<!-- announcements.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Announcements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        div {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        h3 {
            color: #007bff;
        }

        p {
            color: #555;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Announcements</h2>
    <h3><a href="customerDash.php">Back</a></h3>
    <?php
    require_once('../model/db.php');
    $conn = getConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM announcements ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $row["title"] . "</h3>";
            echo "<p>" . $row["content"] . "</p>";
            echo "<a href='../controller/read.php?id=" . $row["id"] . "'>Mark as Read</a><br><br>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>

