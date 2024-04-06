<?php
require_once('../model/db.php');
require_once('../model/userModel.php');

if (isset($_POST['submitReview'])) {
    $user = $_SESSION['id'];
    $review = $_POST['review'];
    $con = getConnection();
    $stmt = $con->prepare("INSERT INTO review (username, review) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $review);

    $stmt->execute();
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Review Page</title>
    
</head>

<body>
    
            
    <div id="messageArea"></div>
    <h3>Write a Review</h3>
    <form action="securityFeedback.php" method="post" onsubmit="return false;">
        <label for="review">Your Review:</label>
        <textarea id="review" name="review"></textarea>
        <input type="submit" value="Submit Review">
    </form>
            
    <li><a href="view/view_feedback.php">View feedback</a></li>       

</body>

</html> 