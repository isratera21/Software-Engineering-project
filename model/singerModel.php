<?php

require_once('../model/db.php');
function singerBook($singer_id){
    $conn = getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE singers SET availability = 'Booked' WHERE id = $singer_id";

     if ($conn->query($sql) === TRUE) {
        return True;
    }
    else{
        return False;
    }

    $conn->close();
}
?>