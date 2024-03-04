<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Add</title>
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

        form {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"] {
            padding: 10px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            background-color: #fff;
            color: #007bff;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        input[type="submit"]:hover {
            color: #f7f7f7;
            background-color: #1977ad;
        }

        .error-message {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h3><a href="customerDash.php">Back</a></h3>
    <h1>Event Information</h1>
    <form action="../controller/eventAddCheck.php" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="">
        Name:     <input type="text" name="name" id="name" value="" ><br>
        Email:    <input type="email" name="email" id="email" value="" ><br>
        Phone:    <input type="number" name="phone" id="phone" value="" ><br>
        Event Name:<input type="text" name="eventName" id="eventName" value="" ><br>
        Date:     <input type="date" name="date" id="date" value="" ><br>
        Location: <input type="text" name="location" id="location" value="" ><br>
        <span id="error-message" class="error-message"></span><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var eventName = document.getElementById("eventName").value;
            var date = document.getElementById("date").value;
            var location = document.getElementById("location").value;
            var errorMessage = document.getElementById("error-message");

            errorMessage.innerHTML = "";

            if (name === "" || email === "" || phone === "" || eventName === "" || date === "" || location === "") {
                errorMessage.innerHTML = "All fields are required.";
                return false;
            }

            

            return true;
        }
    </script>
</body>
</html>
