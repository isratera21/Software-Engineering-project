<?php
    require_once('../model/eventModel.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        
        deleteevent($id);
        header('location: ../view/event_customer_view.php');
    }
?>