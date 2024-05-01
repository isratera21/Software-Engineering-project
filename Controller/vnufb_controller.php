<?php
require_once('../model/venue_Model.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $parking = $_REQUEST['parking'];
    $atmosphere = $_REQUEST['atmosphere'];
    $spacious = $_REQUEST['spacious'];
    $rating =$_REQUEST['rating'];

    addvenuefd($parking,$atmosphere,$spacious,$rating);
    echo "feedback Added Successful";
}
?>


