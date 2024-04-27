<?php
    session_start();
    require_once('../model/feedbackModel.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_SESSION['username'];
        $review = $_REQUEST['review'];

        securityFeed($username,$review);
        echo "Thank you for your review";
    }
?>