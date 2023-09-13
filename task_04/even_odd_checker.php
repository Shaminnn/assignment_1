

<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
    <style>
  <?php include "style.css" ?>
  </style>
</head>
<body>
    <div class="neumorphism-form">
        <h1>Even Odd Checker</h1>
        <form method="post" action="">
            <label for="number">Enter a Number:</label>
            <input type="number" name="number" id="number" required>
            <input type="submit" name="check" value="Check">
        </form>

        <?php
        // Check if the form was submitted
        if (isset($_POST['check'])) {
            // Get user input
            $number = intval($_POST['number']);

            // Check if the number is even or odd
            if ($number % 2 == 0) {
                echo "<p>$number is an even number.</p>";
            } else {
                echo "<p>$number is an odd number.</p>";
            }
        }
        ?>
    </div>
</body>
</html>




