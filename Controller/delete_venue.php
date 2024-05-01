<?php

require_once('../model/venue_delModel.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        deletevenue($id);
        header('location: ../view/venue_list.php');
    }

?>
