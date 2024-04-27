<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Payment</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #fdfd96; /* Pastel yellow background */
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: white; /* White background for the container */
        padding: 40px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .title {
        margin-bottom: 20px;
    }

    select, input, button {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Payment</h1>
        <form action="../controller/process_payment.php" method="post">
            <select name="payment_method" id="payment_method" required>
                <option value="">-- Select Payment Method --</option>
                <option value="card">Card</option>
                <option value="bkash">bKash</option>
            </select>
            <input type="text" name="identifier" id="identifier" placeholder="Enter Card/Bkash Number" required>
            <input type="number" name="amount" id="amount" placeholder="Enter Amount" required min="1" step="any">
            <button type="submit">Submit Payment</button>
        </form>
    </div>
</body>
</html>
