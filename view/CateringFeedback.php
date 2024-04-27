<!DOCTYPE html>
<html>
<head>
<style> 
body {
    font-family: Arial, sans-serif;
    background: url(Premium\ Vector\ _\ Realistic\ blank\ black\ plate\ with\ cutlery\ on\ black\ background.jpg) no-repeat center center/cover ;
    
}

.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: transparent;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);   
}

input[type="text"],
input[type="email"],
textarea {
    width: 50%;
    padding: 10px;
    margin: 5px 0;
    border: 1px transparent;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: chocolate;
    color: #A97882;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: cornflowerblue;
}

textarea {
    height: 100px;
}

.feedback-form {
    margin-top: 10px;
    
}

</style>
    
</head>
<body>
    <a href="feedback.php">Back</a>   
    <h2><center>Catering Feedback Form </center></h2>
    <form action="../controller/catering_controller.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required><br><br>

        <label for="question1">How satisfied were you with the catering service?</label><br>
        <input type="radio" id="option1" name="question1" value="Very satisfied"> Very satisfied<br>
        <input type="radio" id="option2" name="question1" value="Satisfied"> Satisfied<br>
        <input type="radio" id="option3" name="question1" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question1" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" id="option5" name="question1" value="Very dissatisfied"> Very dissatisfied<br><br>
        
        <label for="question2">How satisfied were you with the quality of food at the event?</label><br>
        <input type="radio" id="option1" name="question2" value="Very satisfied"> Very satisfied<br>
        <input type="radio" id="option2" name="question2" value="Satisfied"> Satisfied<br>
        <input type="radio" id="option3" name="question2" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question2" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" id="option5" name="question2" value="Very dissatisfied"> Very dissatisfied<br><br>

        <label for="question3">How satisfied were you with the variety of food options at the event?</label><br>
        <input type="radio" id="option1" name="question3" value="Very satisfied"> Very satisfied<br>
        <input type="radio" id="option2" name="question3" value="Satisfied"> Satisfied<br>
        <input type="radio" id="option3" name="question3" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question3" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" id="option5" name="question3" value="Very dissatisfied"> Very dissatisfied<br><br>

        <label for="question4">How satisfied were you with the overall presentation and setup of the food at the event?</label><br>
        <input type="radio" id="option1" name="question4" value="Very satisfied"> Very satisfied<br>
        <input type="radio" id="option2" name="question4" value="Satisfied"> Satisfied<br>
        <input type="radio" id="option3" name="question4" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question4" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" id="option5" name="question4" value="Very dissatisfied"> Very dissatisfied<br><br>

        <label for="question5">Were there any food allergies or dietary restrictions that we didn't accommodate for?</label><br>
        <input type="radio" id="option1" name="question5" value="Yes"> Yes<br>
        <input type="radio" id="option2" name="question5" value="No"> No<br><br>

        <label for="question6">How easy was it to communicate with our catering team during the planning process?</label><br>
        <input type="radio" id="option1" name="question6" value="Very satisfied"> Very satisfied<br>
        <input type="radio" id="option2" name="question6" value="Satisfied"> Satisfied<br>
        <input type="radio" id="option3" name="question6" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question6" value="Dissatisfied"> Dissatisfied<br>
        <input type="radio" id="option5" name="question6" value="Very dissatisfied"> Very dissatisfied<br><br>

        <label for="question7">How likely are you to recommend our catering services to a friend or colleague?</label><br>
        <input type="radio" id="option1" name="question7" value="Very Likely"> Very Likely<br>
        <input type="radio" id="option2" name="question7" value="Likely"> Likely<br>
        <input type="radio" id="option3" name="question7" value="Neutral"> Neutral<br>
        <input type="radio" id="option4" name="question7" value="Unlikely"> Unlikely<br>
        <input type="radio" id="option5" name="question7" value="Very Unlikely"> Very Unlikely<br><br>

        <label for="comments">Additional Comments:</label><br>
        <label for="question">Is there anything we could have done differently to improve your experience with our catering services?</label><br>
        <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Submit">
        
    </form>
    <a href="../controller/feedback.txt">View feedback</a>
</body>
</html>