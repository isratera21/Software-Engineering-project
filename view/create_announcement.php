<!-- create_announcement.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Announcement</title>
    <style>
        form {
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 50%;
            background-color: #f9f9f9;
        }
        

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

       
        h2 {
            margin-bottom: 20px;
        }
        h3{
            margin-left: 20px;
        }
        div {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2 align = "center">Create Announcement</h2>
    <h3><a href="adminDash.php">Back</a></h3>
    <form  action="../controller/add_announcement.php"  method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
