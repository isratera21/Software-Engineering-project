<?php
  require_once('../model/venue_Model.php');
  
  $id=$_GET['id'];
  $name = $_POST['name'];
  $location = $_POST['location'];

  editVenue($id,$name,$location);
  header('location:../view/venue_list.php');
?>

