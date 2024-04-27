<html>
   <title>Choose Artist</title>
   <style> 
        body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        a {
        position: absolute;
        top: 20px;
        left: 20px; 
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }


        h3 {
          
        text-align: center;
        font-family: Arial, sans-serif;
        color: #3a7de8;
        margin-bottom: 20px;
        margin-top: 0; 
        position: absolute; 
        top: 150px; 
        left: 50%; 
        transform: translateX(-50%); 
        }

        select, input[type="submit"] {
        margin-bottom: 15px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        }

        input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        }

        input[type="submit"]:hover {
        background-color: #0056b3;
        }

        option {
        padding: 5px;
        }

   </style> 

<body>
<a href="feedback.php">Back</a>  
<h3> Select the artist you like most </h3>    
<?php
    
require_once('../model/db.php');
$conn = getconnection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM singers WHERE availability = 'Available'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form method='post' action='book_singer.php'>";
    echo "<select name='singer'>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
       
    }
    
    echo "</select>";
    echo "<input type='submit' value='Book Artist'>";
    echo "</form>";
} else {
    echo "No singers available for booking.";
}

$conn->close();
?>
</body>
</html>