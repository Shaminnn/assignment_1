<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
  <?php include "style.css" ?>
</style>
</head>
<body>
    <div class="neumorphism-form">
        <h1>Temperature Converter</h1>
        <form method="post" action="">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" id="temperature" required>
            <br>

            <label for="conversion">Select Conversion:</label>
            <select name="conversion" id="conversion">
                <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
            </select>
            <br>

            <input type="submit" name="convert" value="Convert">
        </form>

        <?php
        // Check if the form was submitted
        if (isset($_POST['convert'])) {
            // Get user input
            $temperature = floatval($_POST['temperature']);
            $conversion = $_POST['conversion'];

            // Perform the temperature conversion
            if ($conversion === 'celsius_to_fahrenheit') {
                $converted_temperature = ($temperature * 9/5) + 32;
                $from_unit = "Celsius";
                $to_unit = "Fahrenheit";
            } elseif ($conversion === 'fahrenheit_to_celsius') {
                $converted_temperature = ($temperature - 32) * 5/9;
                $from_unit = "Fahrenheit";
                $to_unit = "Celsius";
            }

            // Display the result
            echo "<p>$temperature $from_unit is equal to $converted_temperature $to_unit.</p>";
        }
        ?>
    </div>
</body>
</html>
