<?php
    require_once('../model/serviceModel.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        deleteservice($id);
        header('location: ../view/viewServices.php');
    }
?>