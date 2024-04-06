<?php
    require_once('../model/noticeModel.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        deletenotice($id);
        header('location: ../view/announcements_adminview.php');
    }
?>