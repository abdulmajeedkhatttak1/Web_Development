<!-- Do_While loop in php -->

<?php

$initialLimite = 20;
do{
    echo "$initialLimite,";
    $initialLimite ++;
}
while($initialLimite <=50);

?>


<?php
echo "<br>";
$count = 0;
do {
    echo "$count ";
    if($count%2==0){
        echo "its even number ,$count";
        echo "<br>";
}
    else{
        echo "its Odd number, $count";
        echo "<br>";
    }
    $count++;
}
while($count <10);
?>

<?php
echo "<br>";
$num_of_table = 3; //readline("Enter A Number for Table : ");
echo "Table of number: $num_of_table";
echo "<br>";

$num_for_table = 1;
do {
    $table = $num_of_table * $num_for_table;
    echo "$num_of_table x $num_for_table = $table <br>";
    $num_for_table ++;
}
while($num_for_table <= 10);
?>