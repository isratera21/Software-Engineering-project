<?php

    require_once('db.php');

    function addEvent($name,$email,$phone,$eventName,$date,$location){
        $con = getConnection();
        $sql = "INSERT INTO event (name,email,phone,eventName,date,location) 
        VALUES ('$name','$email','$phone','$eventName','$date','$location')";
        
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    
?>