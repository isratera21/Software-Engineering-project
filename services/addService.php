
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Add Services </title>

    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
            margin-left: 20px;
            color: #007bff;
            transition: color 0.3s ease;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
        }
        a:hover {
            color: #f7f7f7;
            background-color: #1977ad;
        }
        h1 {
            color: #333;
            margin-top: 20px;
            text-align: center;
        }

        
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
        <h3><a href="adminDash.php">Back</a></h3>
        <h2 align = "center"> Add Services </h2>
        <form align = "center" action = "../controller/serviceControl.php"   method  = "POST">
            Service Name:  <input type = "text"  name = "name"  id = "name" value = "" required><br><br>
            Cost:          <input type = "number" name = "cost" id = "cost" value = "" required><br><br>

            <input type="submit" name="submit" value="add service"><br><br>
        </form>
    
    
    </body>
</html>
    