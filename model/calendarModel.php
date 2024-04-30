<?php

require_once('db.php');


function getEvents($currentMonth, $currentYear) {
       
    $conn = getconnection();
        
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, eventName, date FROM event WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
        $result = $conn->query($sql);
        
        $events = [];
        while ($row = $result->fetch_assoc()) {
            $events[date('j', strtotime($row['date']))][] = $row['eventName'];
        }
        return $events;
        // Close MySQL connection
        $conn->close();
}
?>
