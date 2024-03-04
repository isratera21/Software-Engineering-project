<?php

    require_once('db.php');

    function addHoliday($date,$reason){
        $con = getConnection();
        $sql = "INSERT INTO holiday (date,reason) 
        VALUES ('$date','$reason')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    function deleteHoliday($id){
        $con=getConnection();
        $sql="delete from holiday where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>