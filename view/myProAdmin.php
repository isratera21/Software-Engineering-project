<?php
require_once('../controller/cookie_check.php');
session_start();
    require_once('../model/db.php');

    $username=$_SESSION['username'];
    if(isset($_SESSION['username'])){
        $con=getConnection();
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
    }
    else{
        echo "error!";
    }
?>
<html>
    <head>
        <title>admin my profile</title>
        <style> 
            body {
                font-family: Arial, sans-serif;
            }

            a {
                display: inline-block;
                margin: 20px 0;
                padding: 10px 20px;
                background-color: #3498db;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            a:hover {
                background-color: #2980b9;
            }

            fieldset {
                margin: 20px;
                padding: 20px;
                border: 10px solid #3498db; 
                border-radius: 2px; 
                max-width: 450px;
            }
            legend {
                font-weight: bold;
            }

            table {
                width: 50%;
            }

            td {
                padding: 5px;
            }

            strong {
                font-weight: bold;
            }
       </style>
    </head>
    <body><a href="adminDash.php">Back</a>

    <fieldset>
         <legend>My Profile</legend>
          <table>
                <tr>
                    <td><strong>ID</strong></td>
                    <td>:</td>
                    <td><?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>:</td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>:</td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td><strong>Username</strong></td>
                    <td>:</td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td>:</td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
                <tr>
                    <td><strong>Role</strong></td>
                    <td>:</td>
                    <td><?php echo $row['role']; ?></td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>:</td>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
                                    
            </table>
    </fieldset><br>
                            
        <a href="editAddPro.php">Edit</a>
    </body>
</html>
