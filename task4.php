
<!-- Maximum of Three Numbers -->
<!-- Write a PHP script that takes three numbers and prints which one is the largest. -->
<?php
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

?>