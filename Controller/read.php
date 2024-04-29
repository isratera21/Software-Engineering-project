
<?php

require_once('../model/noticeModel.php');

if (isset($_GET['id'])) {
    $announcement_id = $_GET['id'];
    $state = update_state($announcement_id);
    if ($state){
        header('location:../view/announcements.php');
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
}
?>