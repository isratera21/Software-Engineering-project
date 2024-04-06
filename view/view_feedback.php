<div style="display: flex; justify-content: space-around; margin-top: 30px;">
<div style="border: 1px solid #ccc; padding: 10px; margin: 10px; max-width: 400px;background-color: #e0e0e0;">
    <h2 style="color: #333; margin-bottom: 10px;">User Reviews</h2>
    <?php
    $con = getConnection();
    $sql = "SELECT * FROM review";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<p style="margin-bottom: 10px; background-color: #f5f2f2;padding:10px;border-radius: 25px;">' . $row['review'] . '</p>';
        }
    } else {
        echo '<p style="color: #888; font-style: italic; margin-bottom: 10px;">No reviews available.</p>';
    }
    ?>
</div>