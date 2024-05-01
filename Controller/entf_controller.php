
<?php
 session_start();
require_once('../model/feedbackModel.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_SESSION['username'];
    $satisfied = $_POST['satisfied'];
    $inconvenience = $_POST['inconvenience'];
    $suggestion = $_POST['suggestion'];


    entertain_feed($username,$satisfied,$inconvenience,$suggestion);
    echo "Thank you for your feedback";
}
?>


