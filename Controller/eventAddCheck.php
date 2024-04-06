<?php
    require_once('../model/eventModel.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $eventName=$_REQUEST['eventName'];
        $date=$_REQUEST['date'];
        $location=$_REQUEST['location'];
        $service = $_REQUEST['service'];

        if($name=="" && $email=="" && $phone=="" && $eventName=="" && $date=="" && $location=="" && $service){
            echo "Fill all the inputs";
        }
        else{
            $con=getConnection();
            $sql = "select * from holiday";
            $result = mysqli_query($con, $sql);
            $row=mysqli_fetch_assoc($result);
            if($row['date']==$date){
                echo "This is a holiday. Select Another date";
            }
            else{
                addEvent($name,$email,$phone,$eventName,$date,$location,$service);
                echo "Event Added Successful";
            }
           
        }
    }
?>