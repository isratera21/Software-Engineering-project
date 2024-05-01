<?php
require_once('../controller/cookie_check.php');
require_once('../controller/sessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue feedback</title>
    <style>
        body {
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
}

table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

thead {
    background-color: #f2f2f2;
}

th {
    background-color: #3399ff;
    color: white;
}

a {
    color: red;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <h1>Venue FeedbackS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>parking</th>
                <th>atmosphere</th>
                <th>spacious</th>
                <th>rating</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
          require_once('../model/db.php');

            $conn =getConnection();
            $sql = "SELECT * FROM vnu_fb";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["parking"]."</td>";
                    echo "<td>".$row["atmosphere"]."</td>";
                    echo "<td>".$row["spacious"]."</td>";
                    echo "<td>".$row["rating"]."</td>";
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
