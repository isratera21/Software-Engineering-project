<?php

    require_once('db.php');
    
    function deleteservice($id){
        $con=getConnection();
        $sql="delete from service where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>