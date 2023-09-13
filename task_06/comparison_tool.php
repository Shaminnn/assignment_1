

<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
	<style>
  <?php include "style.css" ?>
  </style>
    
</head>
<body>
    <div class="neumorphism-box">
        <h1>Number Comparison Tool</h1>
        <form method="post" action="">
            <label for="num1">Enter the first number:</label>
            <input type="number" name="num1" id="num1" required>
            <label for="num2">Enter the second number:</label>
            <input type="number" name="num2" id="num2" required>
            <input type="submit" name="compare" value="Compare">
        </form>

        <?php
        // Check if the form was submitted
        if (isset($_POST['compare'])) {
            // Get user input
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);

            // Use the ternary operator to determine the larger number
            $largerNumber = ($num1 > $num2) ? $num1 : $num2;

            // Display the result
            echo "<p>The larger number is: $largerNumber</p>";
        }
        ?>
    </div>
</body>
</html>






