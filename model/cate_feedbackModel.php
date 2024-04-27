<?php

    function saveFeedback($name, $email, $rating, $satisfaction, $comments) {
        $feedback = "Name: $name\nEmail: $email\nRating: $rating\nSatisfaction: $satisfaction\nComments: $comments\n\n";
        $file = 'feedback.txt';
        file_put_contents($file, $feedback, FILE_APPEND);
    }
?>
