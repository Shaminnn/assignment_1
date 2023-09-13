

<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
	<style>
  <?php include "style.css" ?>
  </style>
    
</head>
<body>
    <div class="neumorphism-box">
        <?php
        
        $temperature = 25; // Example temperature

        // Provide weather information based on temperature range
        if ($temperature <= 0) {
            echo "<h1>It's freezing!</h1>";
        } elseif ($temperature > 0 && $temperature <= 15) {
            echo "<h1>It's cool.</h1>";
        } elseif ($temperature > 15) {
            echo "<h1>It's warm.</h1>";
        }
        ?>
    </div>
</body>
</html>





