<?php 
  require_once("../model/db.php");   
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $cost = $_POST['cost']; 
        $con = getConnection();
        $result = mysqli_query($con, "INSERT into service(name,cost) values('$name', '$cost')");

        if($result)
        {
           
            header("location: ../view/viewServices.php");
        }
        else{
            echo "Failed";
        }



    }
?>