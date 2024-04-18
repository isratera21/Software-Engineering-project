<?php
require_once('../model/db.php');
$conn = getConnection();

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d Y, h:i:s A');
  $reply_id = $_POST["reply_id"];

  $query = "INSERT INTO tb_data1 VALUES('', '$name', '$comment', '$date', '$reply_id')";
  mysqli_query($conn, $query);
  header('location: ../view/conversation.php');
}

?>