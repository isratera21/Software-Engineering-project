<html>
    <head>
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
    <table width="100%" border="1">
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>Feedback</th>                                   
        </tr>
        <?php
            require_once("../model/db.php");
            $con=getConnection();
            $sql = "select * from review";
            $result = mysqli_query($con, $sql);
            while($row=mysqli_fetch_assoc($result)){
                
                echo 
                "<tr>
                    <td>$row[id]</td>
                    <td>$row[username]</td>
                    <td>$row[review]</td>
                </tr>";}
        ?>
    </table> <br>
    </body>
</html>