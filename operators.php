<!-- 

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators

-->

<!-- Php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Arithmetic operators
        $a = 10;
        $b = 20;
        echo "<h1>Arithmetic Operators</h2>";
        echo "<h2>Given for Addition a = $a and b = $b</h2>";
        echo "Addition: " . ($a + $b) . "<br>";
        echo "<h3> Given for Substraction a = $a and b = $b</h3>";
        echo "Subtraction: " . ($b - $a) . "<br>";
        echo "<h4> Given for Multiplication a = $a and b = $b</h4>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "<h5> Given for Division a = $a and b = $b</h5>";
        echo "Division: " . ($b / $a) . "<br>";
        echo "<h6> Given for Modulus a = $a and b = $b</h6>";
        echo "Modulus: " . ($b % $a) . "<br>";
        echo "<h1> Given for Exponentiation a = $a and b = $b</h1>";
        echo "Exponentiation: " . ($a ** 2) . "<br>";
        echo "<br>";
        // Assignment operators
        echo "<h1>Assignment Operators</h1>";
        $x = 30;
        echo "Initial addition value of x: $x <br>";
        $x += 10; // $x = $x + 10
        echo "After += 10, x: $x <br>";
        echo "Initial subtraction value of x: $x <br>";
        $x -= 5;  // $x = $x - 5
        echo "After -= 5, x: $x <br>";
        echo "Initial multiplication value of x: $x <br>";
        $x *= 2;  // $x = $x * 2
        echo "After *= 2, x: $x <br>";
        echo "Initial division value of x: $x <br>";
        $x /= 5;  // $x = $x / 5
        echo "After /= 5, x: $x <br>";
        echo "Initial modulus value of x: $x <br>";
        $x %= 4;  // $x = $x % 4
        echo "After %= 4, x: $x <br>";
        echo "<br>";


        // Comparison operators

        
    ?>
</body>
</html>