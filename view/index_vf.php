<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue feedback</title>
</head>
<body>
    <a href="viewIndexReview.php">Back</a>
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
