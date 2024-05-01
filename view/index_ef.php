<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment feedback</title>
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
        }
        a:hover {
            color: #0056b3;
        }
        fieldset {
            margin: 20px auto;
            width: 50%;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
        }
        legend {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #007bff;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <a href="viewIndexReview.php">Back</a>
    <fieldset>
        <legend>Entertainment Feedback</legend>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>satisfied</th>
                <th>inconveninece</th>
                <th>suggestion</th>
            </tr>
        </thead>
        <tbody>
        <?php
            
            
            require_once("../model/db.php");
            $conn=getConnection();
            $sql = "SELECT * FROM feedback";
            $result = $conn->query($sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["username"]."</td>"; 
                    echo "<td>".$row["satisfied"]."</td>";
                    echo "<td>".$row["inconvenience"]."</td>";
                    echo "<td>".$row["suggestion"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No feedback found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    </fieldset>
</body>
</html>
