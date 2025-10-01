<!-- while looop in php  -->

<?php

$item = 0;
while($item < 9){
    echo "$item, ";
    $item ++;    
}
echo "<br>";
?>


<?php

$item = 0;
while ($item < 9) {
    echo "$item, ";
    $item++;

    if ($item == 1) {
        echo "Sana Ullah";
        // break;
        continue;
    }
}
echo "<br>";
?>

<?php
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo "$i,";
  $i++;
}
?>