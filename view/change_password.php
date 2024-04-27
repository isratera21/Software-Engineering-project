<?php
require_once('../controller/cookie_check.php');
require_once('../controller/sessionCheck.php');
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        nav {
            padding: 10px;
        }

        h1,
        h5 {
            margin: 0;
        }

        h4 {
            margin-top: 15px;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        hr {
            margin: 0 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin-left: 20px;
            margin-top: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #4CAF50;
        }

        td {
            padding: 15px;
        }

        form {
            width: 70%;
            margin: auto;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
        }
        input {
          width: 100%;
          padding: 8px;
          margin: 5px 0;
          box-sizing: border-box;
          transition: background-color 0.3s ease;
        }

        input:hover {
          background-color: #f5f5f5;
        }
        input[type="text"],
        input[type="number"],
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="reset"] {
            padding: 10px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            background-color: #f44336;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="reset"]:hover {
            background-color: #d32f2f;
        }
        .error-message {
            color: #f00;
            margin-top: 10px;
        }
    </style>
    <body>
    <form method="post" action="../controller/passCheck.php" name="passwordChangeForm">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <table>
                <tr>
                    <td>Current Password </td>
                    <td>:</td>
                    <td><input type="password" name="currentPass" value=""></td>
                </tr>
                <tr>
                    <td style="color: green;">New Password </td>
                    <td>:</td>
                    <td><input type="password" name="newPass" value=""></td>
                </tr>
                <tr>
                    <td style="color: red;">Retype New Password </td>
                    <td>:</td>
                    <td><input type="password" name="retypedPass" value=""></td>
                </tr>
            </table>
            <hr>
            <div id="error-container" class="error-message"></div>
            <table>
                <tr>
                    <td><input type="submit" name="btn" value="Submit"></td>
                    <td><input type="reset" name="btn" value="Reset"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    </body>
    </html>