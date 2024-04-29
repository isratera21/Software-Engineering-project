<?php
    require_once('../model/db.php');
    require_once('../model/serviceModel.php');
    $id= "";
    $name = "";
    $cost = "";
    

    if($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_GET['id'];
        $con=getConnection();
        $sql=" select * from service where id=$id";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_assoc($result);

        $name = $row['name'];
        $cost = $row['cost'];
      include('../view/edit_service_view.php');
    }
    else{
        //post method
        $id= $_POST['id'];
        $name = $_POST['name'];
        $cost = $_POST['cost'];
        updateService($id,$name,$cost);
        header('location: ../view/viewServices.php');
    }
?>


    