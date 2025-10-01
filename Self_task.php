<!-- 🔹 Beginner Level -->

<!-- Task 1: Odd or Even -->
<?php
$num = readline("enter a number pleased: ");
if ($num % 2 == 0){
    echo "the number $num is Even\n";
    echo "<br>";
}
else{
    echo "the number is $num is Odd\n";
    echo "<br>";
}
?>

<!-- Task 2: Voting Eligibility -->
<?php
$age = readline("Enter your Age to check Voting Eligibility: ");
if($age >18){
    echo "your age is $age now you can vote\n";
    echo "<br>";
}
else{
    echo "your age is $age not Eligible\n";
    echo "<br>";
}
?>



<!-- Task 3: Positive, Negative, or Zero -->
<?php
$no = readline("Enter a no : ");
if ($no <0){
    echo "The you enter is Negative No : $no";
    echo "<br>";
}
elseif($no>0){
    echo "The you enter is Positive No : $no";
    echo "<br>";
}
else{
    echo "The you enter is Zero No : $no";
    echo "<br>";
}

?>

<!-- 🔹 Intermediate Level -->

<!-- Grade Calculator
Ask the user to enter their exam marks (0–100). Use conditions to print grades:

90–100 → A

80–89 → B

70–79 → C

60–69 → D

Below 60 → Fail -->

<?php
$marks = readline("Enter your Marks for Grading System : ");
if ($marks >=90 and $marks <= 100){
    echo "Your enter marks is $marks and Grade is A";
    echo "<br>";
}
elseif($marks >=80 and $marks <=89){
    echo "Your enter marks is $marks and Grade is B";
    echo "<br>";
}
elseif($marks >=70 and $marks <=79){
    echo "Your enter marks is $marks and Grade is C";
    echo "<br>";
}
elseif($marks >=60 and $marks <=69){
    echo "Your enter marks is $marks and Grade is D";
    echo "<br>";
}
else{
    echo "Your enter marks is $marks and Grade is Fail";
    echo "<br>";
}

?>




<!-- Maximum of Three Numbers -->
<!-- Write a PHP script that takes three numbers and prints which one is the largest. -->
<!-- <?php
$num_1 = readline("Enter Num 1 :");
$num_2 = readline("Enter Num 2 :");
$num_3 = readline("Enter Num 3 :");


if($num_1 >= $num_2 and $num_1 >= $num_3){ 
    echo "Num 1 is Greater then Num 2 and Num 3 so Num 1 is : $num_1";
    echo "<br>";
}
elseif($num_2 >= $num_1 and $num_2 >= $num_3){
    echo "Num 2 is Greater then Num 1 and Num 3 so Num 2 is : $num_2";
    echo "<br>";
}
else{
    echo "Num 3 is Greater then Num 1 and Num 2 so Num 3 is : $num_3";
    echo "<br>";
}

?> -->
<!-- //////////////////////////////////// SWAPPING  /////////////////////// -->
<?php
$number1 = 10;
$number2 = 20;

$no = $number1;
$number1 = $number2;
$number2 = $no;
echo $number1;
echo "<br>";
echo $number2;


?>