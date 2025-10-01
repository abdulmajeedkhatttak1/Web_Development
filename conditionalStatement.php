<!-- condioton statement in PHP -->
<!-- 
<?php
$age = 20;
if ($age < 18) {
    echo "You are a teenagers.";
} elseif ($age >= 18 && $age < 65) {
    echo "You are an adult and Mature.";
} else {
    echo "You are a senior citizen.";
}
?>  -->

<?php
if (5 > 3) {
  echo "Have a good day!";
}

echo "<br>";

$age_1 = 27;
$age_2 = 18;
if ($age_1 == $age_2) {
  echo "Age_1 is not equal to  Age_2";
}
else {
    echo "Age_2 is greater than Age_1";
}

echo "<br>";

$temperature = 2;
if ($temperature > 25) {
  echo "It's a hot day.";
} elseif ($temperature >20 && $temperature <=25) {
  echo "It's a room temprature.";
} else {
  echo "It's a cold day.";
}
echo "<br>"
?>


<?php
$name1 = "Abdul Majeed";
$name2 = "Sana Ullah";

if ($name1 == $name2){
  echo "Both name are same";
}
else{
  echo "Name1: $name1 , Name didnot match Name2: $name2";
  echo "<br>";
}
?>


<?php
$age = readline("Enter your Age Please : ");
if ($age <= 10){
  echo "you are child of $age years old";
  echo "<br>";
}
elseif ($age >=11 && $age <= 20){
  echo "your age will be teenager sooon now your age is : $age";
  echo "<br>";
}
elseif ($age >21 && $age < 40){
  echo "Young Boy now your age is : $age";
  echo "<br>";
}
else{
  echo "Going Old my dear now your age is : $age";
  echo "<br>";
}
?>





<?php
$time  = date("H");
if ($time < 10){
  echo "Hello Goood Morning ";
}
elseif ($time < 20){
  echo "Hi Goood Evening";
}
else{
  echo "Goood Night";
}

