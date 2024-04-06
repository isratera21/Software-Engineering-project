<?php
    session_start();
    require_once('../model/userModel.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = login($username, $password);

        if ($user['role']=='customer') {
            $_SESSION['flag']="true";
            $_SESSION['username'] = $username;
            header("Location: ../view/customerDash.php");
        } 
        elseif ($user['role']=='admin') {
            $_SESSION['flag']="true";
            $_SESSION['username'] = $username;
            header("Location: ../view/adminDash.php");
        }
        else {
            echo 'Invalid username or password';
        }
    }
    else {
        echo 'Invalid username or password!';
    }
    
?>
