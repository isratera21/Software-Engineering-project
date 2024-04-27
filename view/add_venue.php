<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Venue</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        padding: 20px;
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
    .venue-form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
    }

    .venue-form input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .venue-form button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .venue-form button:hover {
        background-color: #0056b3;
    }
</style>
    
</head>
<body>
    <h3><a href="adminDash.php">Back</a></h3>
    <h1 align = 'center'>Add venue</h1>  
    <form action="../controller/venue_controller.php" method="post" class="venue-form">
        <input type="text" name="name" placeholder="Venue Name" required>
        <input type="text" name="location" placeholder="Location" required>
        <button type="submit">Add Venue</button>
    </form>