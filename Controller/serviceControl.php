<?php 
    require_once("../model/serviceModel.php");   
        if($_SERVER['REQUEST_METHOD']=='POST'){

        $name = $_POST['name'];
        $cost = $_POST['cost']; 
        addService($name, $cost);
        echo"service added successfully";

    }
?>

