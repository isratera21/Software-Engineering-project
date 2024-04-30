<?php
require_once('../model/singerModel.php');


$singer_id = $_POST['singer'];
$book = singerBook($singer_id);



if ($book) {
    echo "Singer booked successfully!";
} else {
    echo "Error booking singer: " . $conn->error();

}

?>

