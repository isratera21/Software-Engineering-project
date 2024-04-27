<?php 
 require_once('../controller/cookie_check.php');
 require_once("../model/db.php"); 
?>

<!DOCTYPE html>
<html>
<head> 
    <title> Services List </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
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
        td a{
            padding: 8px 16px;
            border: 1px solid #850b0f;
            color: #850b0f;
            
        }
        td a:hover{
            color: #f7f7f7;
            background-color: #850b0f;
            
        }
        a {
            text-decoration: none;
            margin-left: 20px;
            color: #007bff;
            transition: color 0.3s ease;
            padding: 10px 20px;
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
    <h3><a href="adminDash.php">Back</a></h3>
    <h2 align = center> Service List </h2>
        <table border="2">
        <tr> 
            <th> Service </th>
            <th> Cost </th>
            <th> Action </th>

        </tr>
   

        <?php
            require_once("../model/db.php");
            $con=getConnection();
            $sql = "select * from service";
            $result = mysqli_query($con, $sql);
            while($row=mysqli_fetch_assoc($result)){
                                    
                echo 
                    "<tr>
                        <td>$row[name]</td>
                        <td>$row[cost]</td>
                        
                        <td>
                           <a href='../controller/update_service.php?id=$row[id]'>update</a>
                           <a href='../controller/deleteservice.php?id=$row[id]'>Delete</a>
                        </td>
                    </tr>";
            }
        ?> 
    </table>
</body>
</html>