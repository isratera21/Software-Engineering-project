<?php

    require_once('db.php');
    
    function deletenotice($id){
        $con=getConnection();
        $sql="delete from announcements where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>