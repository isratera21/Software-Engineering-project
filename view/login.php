<html>
<html lang="en">
<head>
    <title>Login Page</title>
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

        h1, h5, legend {
            color: #333;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        fieldset {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            margin: 5px;
        }

       

        p {
            color: #555;
            line-height: 1.6;
        }

        /* Apply styles to the links */
        a {
            text-decoration: none;
            color: #009688;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

<body>   
<table align="center">
    <tr>
        <td>
        <form name="loginForm" action="../controller/loginCheck.php" method="post" onsubmit="return validateLoginForm()">
                <fieldset>
                    <legend>LogIn</legend>
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><input type="text" name="username" value="" placeholder="Enter your username" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input type="password" name="password" value="" placeholder="Enter your password" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="btn" value="Submit" />
                                <input type="reset" name="rst" value="Reset" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                Don't have an Account?<br>
                                <a href="registration.php">Register Now</a>
                            </td>
                        </tr>  
                    </table>
                </fieldset>
            </form>
        </td>
    </tr>
</table>
</body>
</html>
