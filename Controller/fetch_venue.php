<?php
require_once('../model/db.php');
$conn = getConnection();
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `vnu` where id='$id'");
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>edit</title>
<style>
 <style>
      input[type=text], select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=number], select {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 8px 0 65px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 10%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }

</style>
</head>
 
<body>
<h2>Edit</h2>
<form method="POST" action="edit_venue.php?id=<?php echo $id; ?>">
    <label>name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
    <label>Location:</label><input type="text" value="<?php echo $row['location']; ?>" name="location">
    <input type="submit" name="submit" value= "update">
    <a href="../view/venue_list.php">Back</a>
</form>
</body>
</html>
