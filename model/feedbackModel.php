<?php

    require_once('db.php');
    
    function addvenuefd($parking, $atmosphere,  $spacious,  $rating){
        $con = getConnection();
        $sql = "INSERT INTO vnu_fb (parking,atmosphere,spacious,rating) VALUES ('$parking', '$atmosphere', '$spacious', '$rating')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }


    function entertain_feed($username,$satisfied,$inconvenience,$suggestion){
        $con = getConnection();
        $sql = "INSERT INTO feedback (username,satisfied,inconvenience,suggestion) VALUES ('$username','$satisfied','$inconvenience','$suggestion')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

    function securityFeed($username, $review){
        $con = getConnection();
        $sql= "INSERT INTO review (username, review) VALUES ('$username', '$review')";
        if(mysqli_query($con, $sql)){
            return true;
        }
        else{
            return false;
        }
    }

 

    function saveFeedback($name, $email, $rating, $satisfaction, $comments) {
        $feedback = "Name: $name\nEmail: $email\nRating: $rating\nSatisfaction: $satisfaction\nComments: $comments\n\n";
        $file = 'feedback.txt';
        file_put_contents($file, $feedback, FILE_APPEND);
    }

?>


