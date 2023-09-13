<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
  <?php include "style.css" ?>
  </style>
</head>
<body>
    <div class="neumorphism-box">
        <h1>Simple Calculator</h1>
        <form method="post" action="">
            <label for="num1">Enter the first number:</label>
            <input type="number" name="num1" id="num1" required>
            <label for="num2">Enter the second number:</label>
            <input type="number" name="num2" id="num2" >
            <label for="operation">Select Operation:</label>
            <select name="operation" id="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="percentage">Percentage</option>
                <option value="average">Average</option>
                <option value="binaryToDecimal">Binary to Decimal</option>
                <option value="binaryToOctal">Binary to Octal</option>
                <option value="binaryToHex">Binary to Hexadecimal</option>
                <option value="decimalToBinary">Decimal to Binary</option>
                <option value="decimalToOctal">Decimal to Octal</option>
                <option value="decimalToHex">Decimal to Hexadecimal</option>
                <option value="octalToDecimal">Octal to Decimal</option>
                <option value="octalToBinary">Octal to Binary</option>
                <option value="octalToHex">Octal to Hexadecimal</option>
                <option value="hexToDecimal">Hexadecimal to Decimal</option>
                <option value="hexToBinary">Hexadecimal to Binary</option>
                <option value="hexToOctal">Hexadecimal to Octal</option>
            </select>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
        // Check if the form was submitted
        if (isset($_POST['calculate'])) {
            // Get user input
            $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
            $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
            $operation = $_POST['operation'];

            // Perform the selected operation
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    $operationName = 'Addition';
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    $operationName = 'Subtraction';
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    $operationName = 'Multiplication';
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        $operationName = 'Division';
                    } else {
                        $result = 'Undefined (Division by zero)';
                        $operationName = 'Division';
                    }
                    break;
                case 'percentage':
                    if ($num2 != 0) {
                        $result = ($num1 * $num2) / 100;
                        $operationName = 'Percentage';
                    } else {
                        $result = 'Undefined (Division by zero)';
                        $operationName = 'Percentage';
                    }
                    break;
                case 'average':
                    $result = ($num1 + $num2) / 2;
                    $operationName = 'Average';
                    break;
                case 'binaryToDecimal':
                    $result = bindec($num1);
                    $operationName = 'Binary to Decimal';
                    break;
                case 'binaryToOctal':
                    $decimalValue = bindec($num1);
                    $result = decoct($decimalValue);
                    $operationName = 'Binary to Octal';
                    break;
                case 'binaryToHex':
                    $decimalValue = bindec($num1);
                    $result = dechex($decimalValue);
                    $operationName = 'Binary to Hexadecimal';
                    break;
                case 'decimalToBinary':
                    $result = decbin($num1);
                    $operationName = 'Decimal to Binary';
                    break;
                case 'decimalToOctal':
                    $result = decoct($num1);
                    $operationName = 'Decimal to Octal';
                    break;
                case 'decimalToHex':
                    $result = dechex($num1);
                    $operationName = 'Decimal to Hexadecimal';
                    break;
                case 'octalToDecimal':
                    $result = octdec($num1);
                    $operationName = 'Octal to Decimal';
                    break;
                case 'octalToBinary':
                    $decimalValue = octdec($num1);
                    $result = decbin($decimalValue);
                    $operationName = 'Octal to Binary';
                    break;
                case 'octalToHex':
                    $decimalValue = octdec($num1);
                    $result = dechex($decimalValue);
                    $operationName = 'Octal to Hexadecimal';
                    break;
                case 'hexToDecimal':
                    $result = hexdec($num1);
                    $operationName = 'Hexadecimal to Decimal';
                    break;
                case 'hexToBinary':
                    $decimalValue = hexdec($num1);
                    $result = decbin($decimalValue);
                    $operationName = 'Hexadecimal to Binary';
                    break;
                case 'hexToOctal':
                    $decimalValue = hexdec($num1);
                    $result = decoct($decimalValue);
                    $operationName = 'Hexadecimal to Octal';
                    break;
                default:
                    $result = 'Invalid operation';
                    $operationName = 'Invalid operation';
                    break;
            }

            // Display the result
            echo "<p>$operationName Result: $result</p>";
        }
        ?>
    </div>
</body>
</html>
