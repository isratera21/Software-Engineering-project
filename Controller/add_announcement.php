<?php
require_once('../model/db.php');
require_once('../model/announcementModel.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    addAnnouncement($title,$content);
    echo "New announcement created successfully";
}
?>
