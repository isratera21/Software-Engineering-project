<?php 
require_once('connect.php');
if($_SERVER['REQUEST_METHOD'] !='POST'){
    echo "<script> alert('Error: No data to save.'); location.replace('./') </script>";
    $conn->close();
    exit;
}
extract($_POST);
$allday = isset($allday);
 
if(empty($ID)){
    $sql = "INSERT INTO `timing` (`Title`,`Start_date`,`End_date`) VALUES ('$Title','$Start_date','$End_date')";
}else{
    $sql = "UPDATE `timing` set `Title` = '{$Title}', `Start_date` = '{$Start_date}', 'End_date` = '{$End_date}' where `ID` = '{$ID}'";
}
$save = $conn->query($sql);
if($save){
    echo "<script> alert('Schedule Successfully Saved.'); location.replace('./') </script>";
}else{
    echo "<pre>";
    echo "An Error occurred.<br>";
    echo "Error: ".$conn->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$conn->close();
?>