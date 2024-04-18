<?php
require_once('../controller/cookie_check.php');
session_start();
    require_once('../model/db.php');
    
    $name = "";
    $email = "";
    $username = "";
    $phone = "";
   

    $username = $_SESSION['username'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($con));
    }

    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        die("No data found for the given username");
    }
} else {
    // POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
  

    $con = getConnection();
    $sql = "UPDATE users SET name='$name', email='$email',phone='$phone',username='$username' WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        die("Error updating record: " . mysqli_error($con));
    }

    header('location: myProCus.php');
    exit();
}
?>

<html>
<html lang="en">
<head>
    <title>Edit My Profile Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h5 {
            color: #333;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            color: #009688;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        ul li a:hover {
            color: #009688;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
        }

        footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            margin-bottom: 20px;
        }

        fieldset {
            margin-top: 20px;
        }

        legend {
            font-weight: bold;
            color: #009688;
        }

        input[type="submit"], input[type="reset"] {
            padding: 10px;
            background-color: #009688;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #00796b;
        }

        input[type="number"], input[type="text"], input[type="email"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="date"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin-bottom: 20px;
        }
    </style>
  
</head>
<body>
    
                <table width="100%" height="90%" border="1">
                    <tr>
                       
                        <td width="80%">
                        <a href="myProCus.php">Back</a>
                            <fieldset>
                                <legend>Edit My Profile</legend>
                                <form name="editProfileForm" action="editCusPro.php" method="post" onsubmit="return validateEditProfileForm()">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <table>
                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td><input type="text" name="name" value="<?php echo $row['name']; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><input type="email" name="email" value="<?php echo $row['email']; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input type="text" name="username" value="<?php echo $row['username']; ?>" /></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td><input type="number" name="phone" value="<?php echo $row['phone']; ?>" /></td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="3">
                                            <input type="submit" name="btn" value="Submit" />
                                            <input type="reset" name="rst" value="Reset" />
                                        </td>
                                    </tr>
                                    
                                </table>
                                </form>
                            </fieldset><br>
                            
                        </td>
                    </tr>

                </table>
            
</body>
</html>