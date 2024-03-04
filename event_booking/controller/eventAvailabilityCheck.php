<?php
require_once("../model/db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_REQUEST['date'];

    if ($date == "") {
        echo "Enter a Date";
    } else {

        $con = getConnection();
        $sql = "SELECT * FROM holiday";
        $result = mysqli_query($con, $sql);

        $isHoliday = false;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['date'] == $date) {
                $isHoliday = true;
                break;
            }
        }

        if ($isHoliday) {
            echo "This is a holiday. Select Another date";
        } else {
            header("location: ../view/eventAdd.php");
        }
    }
}
?>
