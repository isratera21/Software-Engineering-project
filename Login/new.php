<?php 
    include("connect.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Transparent Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    

</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="log.php" method="POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"> </br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"></br></br>   
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
</body>
</head>  