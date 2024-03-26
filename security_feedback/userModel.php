<?php

    require_once('db.php');

    function login($username, $password) {
        $con = getConnection();
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }

    function registration($name,$email,$username,$phone,$password,$userType,$gender){
        $con = getConnection();
        $sql = "INSERT INTO users (name,  username,password, email, role, phone,   gender) 
        VALUES ('$name', '$username', '$password','$email', '$userType','$phone',   '$gender')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function viewUser($id){
        $con = getConnection();
        $sql = "select * from users where username='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            return $row;
        } else {
            return null;
        }
    }

?>