
<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <div class="neumorphism-form">
        <h1>Grade Calculator</h1>
        <form method="post" action="">
            <label for="score1">Test Score 1:</label>
            <input type="number" name="score1" id="score1" required>
            <label for="score2">Test Score 2:</label>
            <input type="number" name="score2" id="score2" required>
            <label for="score3">Test Score 3:</label>
            <input type="number" name="score3" id="score3" required>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        // Check if the form was submitted
        if (isset($_POST['calculate'])) {
            // Get user input
            $score1 = floatval($_POST['score1']);
            $score2 = floatval($_POST['score2']);
            $score3 = floatval($_POST['score3']);

            // Calculate the average score
            $average_score = ($score1 + $score2 + $score3) / 3;

            // Determine the letter grade
            $letter_grade = '';
            if ($average_score >= 90) {
                $letter_grade = 'A';
            } elseif ($average_score >= 80) {
                $letter_grade = 'B';
            } elseif ($average_score >= 70) {
                $letter_grade = 'C';
            } elseif ($average_score >= 60) {
                $letter_grade = 'D';
            } else {
                $letter_grade = 'F';
            }

            // Display the result
            echo "<p>Average Score: $average_score</p>";
            echo "<p>Letter Grade: $letter_grade</p>";
        }
        ?>
    </div>
</body>
</html>



