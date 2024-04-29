<?php
require_once('db.php'); 

function addAnnouncement($title,$content){
    $conn = getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO announcements (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        return True;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


function getUnreadAnnouncementCount() {
    $conn = getConnection();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT COUNT(*) AS unread_count FROM announcements WHERE is_read = 0";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row["unread_count"];
    } else {
        return 0;
    }

    $conn->close();
}

?>
