<?php
require_once('../model/venue_Model.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $location = $_POST['location'];
    addVenue($name,$location);
    echo"Venue added successfully";
}
?>
