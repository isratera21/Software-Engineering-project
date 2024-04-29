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

    function update_state($announcement_id){
    $conn = getConnection();

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE announcements SET is_read = 1 WHERE id = $announcement_id";
    if ($conn->query($sql) === TRUE) {
        return True;
    } else {
        return False;
    }

    $conn->close();
    }
?>