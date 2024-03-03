<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Payment Processing</title>
</head>
<body>
    <div class="payment-container">
        <h1>Secure Payment Processing</h1>
        <form action="/process_payment" method="post">
            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

            <label for="expiryDate">Expiry Date</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>

            <button type="submit">Submit Payment</button>
        </form>
    </div>
</body>
</html>
