<?php
// Connect to MySQL
require_once('../model/db.php');
$conn = getconnection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get current month and year or set default values
$currentMonth = isset($_GET['month']) ? intval($_GET['month']) : date('n');
$currentYear = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

// Calculate previous and next month
$prevMonth = $currentMonth - 1;
$prevYear = $currentYear;
if ($prevMonth == 0) {
    $prevMonth = 12;
    $prevYear--;
}

$nextMonth = $currentMonth + 1;
$nextYear = $currentYear;
if ($nextMonth == 13) {
    $nextMonth = 1;
    $nextYear++;
}

// Get events from the database for the current month
$sql = "SELECT id, eventName, date FROM event WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
$result = $conn->query($sql);

$events = [];
while ($row = $result->fetch_assoc()) {
    $events[date('j', strtotime($row['date']))][] = $row['eventName'];
}

// Close MySQL connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .event {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<h2>Event Calendar</h2>

<div>
    <a href="?month=<?= $prevMonth ?>&year=<?= $prevYear ?>">Previous Month</a>
    <span><?= date('F Y', mktime(0, 0, 0, $currentMonth, 1, $currentYear)) ?></span>
    <a href="?month=<?= $nextMonth ?>&year=<?= $nextYear ?>">Next Month</a>
</div>

<table>
    <thead>
        <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $firstDayOfMonth = strtotime("$currentYear-$currentMonth-01");
        $numDays = date('t', $firstDayOfMonth);
        $dayOfWeek = date('w', $firstDayOfMonth);
        $currentDay = 1 - $dayOfWeek;

        for ($i = 0; $i < ceil(($numDays + $dayOfWeek) / 7); $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                echo "<td>";
                if ($currentDay > 0 && $currentDay <= $numDays) {
                    $date = date('Y-m-d', strtotime("+$currentDay day", $firstDayOfMonth));
                    echo "<strong>$currentDay</strong><br>";
                    if (isset($events[$currentDay])) {
                        foreach ($events[$currentDay] as $event) {
                            echo "<div class='event'>$event</div>";
                        }
                    }
                }
                echo "</td>";
                $currentDay++;
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
