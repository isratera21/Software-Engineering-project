<?php 
  require_once("../model/db.php");   
    if(isset($_POST['submit'])){

        $uname = $_POST['uname'];
        $q1= $_POST['q1']; 
        $q2= $_POST['q2']; 
        $q3= $_POST['q3']; 
        $q4= $_POST['q4']; 
        $review = $_POST['review']

        $con = getConnection();
        $result = mysqli_query($con, "INSERT into sfeed(username,q1,q2,q3,q4,review) values('$uname', '$q1','$q2','$q3','$q4',$review)");

        if($result)
        {
           
            header("location: ../view/securityFeedback.php");
        }
        else{
            echo "Failed";
        }



    }
?>