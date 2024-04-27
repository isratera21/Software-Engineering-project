<?php
require_once('../controller/cookie_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Review</title>
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
    <a href="securityFeedback.php">Back</a>
    <fieldset>
        <legend>My Review</legend>
        <table>
            <tr>
                <th>Username</th>
                <th>Feedback</th>                                   
            </tr>
            <?php
                session_start();
                require_once("../model/db.php");
                $username=$_SESSION['username'];
                $con=getConnection();
                $sql = "SELECT * FROM review WHERE username = ?";
                $stmt = mysqli_prepare($con, $sql);
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$row['username']}</td>
                            <td>{$row['review']}</td>
                        </tr>";
                    }
                }
            ?>
        </table>
    </fieldset>
</body>
</html>
