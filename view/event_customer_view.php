<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booked Event</title>
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

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-left: 20px;
            color: #007bff;
            transition: color 0.3s ease;
            padding: 10px 15px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }

        a:hover {
            color: #f7f7f7;
            background-color: #1977ad;
        }
    </style>
</head>
<body>
    <h3><a href="customerDash.php">Back</a></h3>
    <h1>View Booked Event</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Event Name</th>
            <th>Date</th>
            <th>Location</th> 
            <th>Service</th>
            <th>Action</th> 
        </tr>
            <?php
                require_once("../model/db.php");
                $con=getConnection();
                $sql = "select * from event";
                $result = mysqli_query($con, $sql);
                while($row=mysqli_fetch_assoc($result)){
                                        
                    echo 
                        "<tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[eventName]</td>
                            <td>$row[date]</td>
                            <td>$row[location]</td>
                            <td>$row[service]</td>
                            <td>
                            <a href='../controller/update_event.php?id=$row[id]'>update</a>
                            <a href='../controller/delete_event.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>";
                }
            ?>
    </table> 
</body>
</html>
