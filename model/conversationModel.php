<?php
require_once('../model/db.php');

function add_comments($name,$comment,$data,$reply_id){
  $conn = getConnection();

  $query = "INSERT INTO tb_data1 VALUES('', '$name', '$comment', '$date', '$reply_id')";
  $res = mysqli_query($conn, $query);

  if($res){
    return True;
  }
  else{
    return False;
  }
}
?>