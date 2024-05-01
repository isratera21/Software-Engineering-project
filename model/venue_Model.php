<?php

    require_once('db.php');

    function addVenue($name,$location){
        $con = getConnection();
        $sql = "INSERT INTO vnu (name,location) VALUES ('$name','$location')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }

    }
    
    function editVenue($id,$name,$location){
        $con = getConnection();
        $sql= "update `vnu` set name='$name', location='$location' where id='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
    
    


    function deletevenue($id){
        $con=getConnection();
        $sql="delete from vnu where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }
?>