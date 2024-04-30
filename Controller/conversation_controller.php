<?php
require_once('../model/conversationModel.php');


if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];
  
  add_comments($name,$comment,$data,$reply_id);
  
  header('location: ../view/conversation.php');
}

?>