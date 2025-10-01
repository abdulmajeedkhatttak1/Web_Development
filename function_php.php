<!-- Functions Practice in PHP -->

<?php
// -------------------------------
// 1. Simple Function
// -------------------------------
function myfirstphpfunction() {
    echo "I am learning PHP. This is my first function in PHP.<br>";
}
myfirstphpfunction();
?>

<?php
// -------------------------------
// 2. Function with Parameters
// -------------------------------
function names($name) {
    echo "My name is $name<br>";
}
names("Sana Ullah");
names("Abdul Majeed");
names("Wajid Nawaz");
?>

<?php

// -------------------------------
// 3. Function with Multiple Parameters
// -------------------------------
function name_age($name, $age) {
    echo "My name is $name and I am $age years old.<br>";
}
name_age("KHAN", 57);
?>

<?php

// -------------------------------
// 4. Function with Default Argument
// -------------------------------
function DefultFunction($num = 20) {
    echo "I am a default function in PHP. Number = $num<br>";
}
DefultFunction();     // uses default
DefultFunction(40);   // overrides default
DefultFunction(60);   // overrides default
?>

<?php


// -------------------------------
// 5. Function Returning Values
// -------------------------------
function returnphp($x, $y) {
    echo "I am a return function in PHP.<br>";
    $z = $x + $y;
    return $z;
}

$sum = returnphp(4, 5);
echo "4 + 5 = $sum<br>";
echo "5 + 8 = " . returnphp(5, 8) . "<br>";
?>

<?php

// -------------------------------
// 6. Passing Arguments by Reference
// -------------------------------
function pssarg(&$no) {
    $no += 20;
}
$num = 50;
pssarg($num);
echo "Passing Arguments by Reference: $num<br>";
?>
