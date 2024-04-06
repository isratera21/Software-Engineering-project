<?php
    require_once('../model/holidayModel.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        deleteHoliday($id);
        header('location: ../view/viewHoliday.php');
    }
?>