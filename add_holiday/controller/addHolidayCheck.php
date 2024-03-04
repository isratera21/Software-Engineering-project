<?php
    require_once('../model/holidayModel.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_REQUEST['id'];
        $date=$_REQUEST['date'];
        $reason=$_REQUEST['reason'];

        if($date==""||$reason==""){
            echo "Enter Date and Reason";
        }
        else{
            addHoliday($date,$reason);
            echo "Holiday Added Successful";
        }
    }
?>