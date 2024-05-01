<?php

    require_once('db.php');
    
    function changePass($newPass,$username){
        $con=getConnection();
        $updateSql = "UPDATE users SET password = '$newPass' WHERE username = '$username'";
        $updateResult = mysqli_query($con, $updateSql);
        if($updateResult){
            return true;
        }
        else{
            return false;
        }
    }
?>