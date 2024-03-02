<?php 
	require_once('connect.php');
	if(!isset($_GET['ID'])){
	    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
	    $conn->close();
	    exit;
	}
 
	remove = $conn->query("DELETE FROM `timing` where ID = '{$_GET['ID']}'");
	if($remove){
	    echo "<script> alert('Event has deleted successfully.'); location.replace('./') </script>";
	}else{
	    echo "<pre>";
	    echo "An Error occured.<br>";
	    echo "Error: ".$conn->error."<br>";
	    echo "SQL: ".$sql."<br>";
	    echo "</pre>";
	}
	$conn->close();
 
	?>