<!DOCTYPE html>
<html>
<head>
    <title>Personal Information</title>
	<style>
	h1{
	text-align:center;	
	}
	</style>
</head>
<body>
    <?php
    // Define variables
    $name = "Shamin Yasar";
    $age = 35;
    $country="Bangladesh";	
    $introduction = "Assalamualikum, I'm Shamin Yasar. I am $age years old and I'm from $country.
	                I want to be a passionate Laravel Developer. That's why I got admitted 
					myself in Ostad platform.With the help of Ostad I'll be Ostad Insa'Allah.";
	

    // Display personal information
    echo "<h1>Personal Information</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>Introduction:</strong> $introduction</p>";
    ?>
</body>
</html>
