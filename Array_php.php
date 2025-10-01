<!-- PHP Arrays Tutorial -->
<?php
// 1. Count Elements in an Array
echo "<h2>Count Elements in an Array</h2>";
$name = array("Auola", "Jhon", "Smiley", "Karia", "Gole");
echo "The count in Array is: " . count($name) . "<br><br>";

// 2. Indexed Arrays
echo "<h2>Indexed Arrays</h2>";
var_dump($name);
echo "<br><br>";

// 3. Access Array Elements
echo "<h2>Access Array Elements</h2>";
echo "I am accessing index position 2: " . $name[2] . "<br><br>";

// 4. Change Array Values
echo "<h2>Change Array Values</h2>";
$name[0] = "Kuran";
var_dump($name);
echo "<br><br>";

// 5. Loop Through an Indexed Array
echo "<h2>Loop Through an Indexed Array</h2>";
foreach ($name as $n) {
    echo "$n <br>";
}
echo "<br>";

// 6. Access by Index Number
echo "<h2>Access by Index Number</h2>";
echo $name[0] . "<br>";
echo $name[2] . "<br>";
echo $name[4] . "<br><br>";

// 7. Add Elements Using array_push
echo "<h2>Add Elements Using array_push</h2>";
array_push($name, "Kulaye");
var_dump($name);

// 8. PHP Associative Arrays
echo "<h2> PHP Associative Arrays <br> </h2>";
$new_name = array("Khula" => 123, "Question" => "Answer");
var_dump($new_name);

// 9. Access Associative Arrays
echo "<h2> Access Associative Arrays <br></h2>";
echo $new_name['Khula'];


// 10. Change Value
echo "<h2> Change Value <br> </h2>";
$new_name['Khula'] = "Name";
var_dump($new_name);

// 11. Loop Through an Associative Array
echo "<h2> Loop Through an Associative Array <br> </h2>";
foreach ($new_name as $a => $b){
    echo "$a : $b <br>";
}

// 12. PHP Create Arrays
echo "<h2> PHP Create Arrays <br> </h2>";
$fruit = array("Apples","Mango","Orange","WaterMelon",);
foreach ($fruit as $x => $y) {
  echo "$x: $y <br>";
}

$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>70, "WaterMelon" => 100,];
foreach ($fruits as $x => $y) {
  echo "$x: $y <br>";
}

// 13. PHP Update Array Items
echo "<h2><br>PHP Update Array Items</h2>.";
$fruit = ["Apple","Banana","Mango"];
$fruit[1]="Lemon";
var_dump($fruit);

echo "<br> Again <br>";
$names = ["Jhon","karin","Waits","Mouta"];
$names[2]="Ghudta";
var_dump($names);

echo "<br>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>70, "WaterMelon" => 100,];
$fruits['Mango']=70;
var_dump($fruits);

// 14. Add Array Item
echo "<h2><br>Add Array Item</h2>";
$city = ['Dubai',"Dehli","Islamabad","Kashmur"];
$city[]="Tokoyo";
var_dump( $city);
echo "<br>";
$fruits["Banana"]=100;
var_dump($fruits);

// 15. Add Multiple Array Items
echo "<h2><br> Add Multiple Array Items</h2>";
array_push($fruits,"Lemon","Graphs");
var_dump($fruits);
echo "<br>";
$fruits += [ "Lemom"=> 150, "Graphs"=>300];
var_dump($fruits);

// 16. PHP Delete Array Items
echo "<h2><br> PHP Delete Array Items</h2>";
$cars = ['Toyota','BMW','Coroola','Vitz',];
array_splice($cars,0,2);
var_dump($cars);
echo "<br>";
unset($cars[1]);
var_dump($cars);
echo "<br>";
unset($cars[0],$cars[2]);
var_dump($cars);

// 17. Remove Item From an Associative Array
echo "<br><h2> Remove Item From an Associative Array</h2>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>70, "WaterMelon" => 100,];
unset($fruits['Orange']);
var_dump($fruits);


// 18. Using the array_diff Function
echo "<br><h2> Using the array_diff Function </h2>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
$newfruits = array_diff($fruit,["70",100]);
var_dump($newfruits);

// 19. Remove the Last Item
echo "<br><h2> Remove the Last Item </h2>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
array_pop($fruits);
var_dump($fruits);

// 20. Remove the First Item
echo "<br><h2> Remove the First Item </h2>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
array_shift($fruits);
var_dump($fruits);

// 21. PHP Sorting Arrays
echo "<br><h1> sort() PHP Sorting Arrays <h2>";
// Sort Array in Ascending Order - sort()
$names = ["Jhon","karin","Waits","Arri","Mouta"];
sort($names);
echo "<h2>I am Sorting Functon</h2>";
$name_length = count($names);
for ($x = 0; $x < $name_length; $x++){
  echo $names[$x] . "<br>";
}
echo "<br> sort()<br>";
$numbers = [10,24,32,12,11,4,6,1,2,0];
sort($numbers);
$num_length = count($numbers);
for ($num = 0; $num < $num_length; $num++){
  echo $numbers[$num]. "<br>";
}

echo "<br> rsort() <br>";
$numbers = [10,24,32,12,11,4,6,1,2,0];
rsort($numbers);
$num_length = count($numbers);
for ($num = 0; $num < $num_length; $num++){
  echo $numbers[$num]. "<br>";
}


echo "<br> asort() <br>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
rsort($fruits);
foreach($fruits as $fruit => $x_value){
  echo "keys = " . $fruit . ",value " . $x_value . "<br>"; 
}

echo "<br> ksort() <br>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
ksort($fruits);
foreach($fruits as $fruit => $x_value){
  echo "keys = " . $fruit . ",value " . $x_value . "<br>"; 
}

echo "<br> arsort() <br>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
arsort($fruits);
foreach($fruits as $fruit => $x_value){
  echo "keys = " . $fruit . ",value " . $x_value . "<br>"; 
}

echo "<br> krsort() <br>";
$fruits = ["Apples" => 46, "Mango" => 50, "Orange" =>"70", "WaterMelon" => 100,];
krsort($fruits);
foreach($fruits as $fruit => $x_value){
  echo "keys = " . $fruit . ",value " . $x_value . "<br>"; 
}

// 22. The basic 2D Array (Matrix Style)
echo "<br><h2>The basic 2D Array (Matrix Style)</h2>";
$matrix = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo $matrix[1][1];
echo "<br>";
echo $matrix[0][1];
echo "<br>";
echo $matrix[2][2];

// 23. Associative Multidimensional Array
echo "<br><h2>Associative Multidimensional Array</h2>";
$students = [
    "Ali" => ["age" => 20, "grade" => "A", "city" => "Lahore"],
    "Sara" => ["age" => 22, "grade" => "B", "city" => "Karachi"],
    "John" => ["age" => 19, "grade" => "A+", "city" => "Islamabad"]
];
echo $students["Sara"]["grade"];
echo "<br>";
echo $students["Sara"]["city"]; 
echo "<br>";
echo "Sara’s grade is " . $students["Sara"]["grade"] . 
     " and she lives in " . $students["Sara"]["city"];

// 24. Looping Through Multidimensional Arrays
echo "<br><h2>Looping Through Multidimensional Arrays</h2>";
$students = [
    ["name" => "Ali", "age" => 20, "grade" => "A"],
    ["name" => "Sara", "age" => 22, "grade" => "B"],
    ["name" => "John", "age" => 19, "grade" => "A+"]
];
foreach ($students as $student) {
    echo "Name: " . $student["name"] . " - Grade: " . $student["grade"] . "- Age: " . $student['age'] . "<br>";
}




?>