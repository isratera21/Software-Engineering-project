<!DOCTYPE html>
<html>
<head> 
    <title> Add Services </title>

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
    
        <h2 align = "center"> update Services info </h2>
        <form align = "center" action = "../controller/update_service.php"   method  = "POST">
            <input type = "hidden" name = "id" value="<?php echo $id; ?>" >
            Service Name:  <input type = "text"  name = "name"  id = "name" value="<?php echo $name; ?>" required><br><br>
            Cost:          <input type = "number" name = "cost" id = "cost" value="<?php echo $cost; ?>" required><br><br>

            <input type="submit" name="submit" value="update"><br><br>
        </form>
    </body>
</html>