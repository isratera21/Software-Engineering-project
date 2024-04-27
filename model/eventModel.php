<?php

    require_once('db.php');

    function addEvent($username,$email,$phone,$eventName,$date,$location,$service){
        $con = getConnection();
        $sql = "INSERT INTO event (username,email,phone,eventName,date,location,service) 
        VALUES ('$username','$email','$phone','$eventName','$date','$location','$service')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function deleteevent($id){
        $con=getConnection();
        $sql="delete from event where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    
?>
