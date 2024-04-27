<?php

    require_once('db.php');
    

    function addService($name,$cost){
        $con = getConnection();
        $sql = "INSERT into service(name,cost) values('$name', '$cost')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }

    }




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
