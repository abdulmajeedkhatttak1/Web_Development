<!-- Foreach Loop in php -->

<?php

$colors = array("Red","Blue","Yellow","Green");
foreach($colors as $x){
    // if ($x == "Blue"){
    //     echo "I am $x color so I will stop Foreach Loop.<br>";
    //     break;
    // }
    echo "$x<br>";
}
?>


<?php
$name_age = array("Sana Ullah"=>"27","Abdul Majeed"=>"27.5");
foreach($name_age as $x => $y){
    echo "$x:$y <br>";
}
?>