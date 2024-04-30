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
            setcookie('flag', 'true', time()+10000, '/');
            header("Location: ../view/customerDash.php");
        } 
        else if ($user['role']=='admin') {
            $_SESSION['flag']="true";
            $_SESSION['username'] = $username;
            setcookie('flag', 'true', time()+10000, '/');
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