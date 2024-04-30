<?php
require_once('../model/feedbackModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $satisfaction = $_POST['question1']; 
    $satisfaction = $_POST['question2']; 
    $comments = $_POST['comments'];

    
    saveFeedback($name, $email, $rating, $satisfaction, $comments);

    echo " Feedback added sucessfully";
} else {
    header("Location: ../view/CateringFeedback.php");
    exit();
}
?>
