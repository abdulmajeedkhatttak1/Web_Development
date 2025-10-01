<?php
$name = "Abdul Majeed";
switch($name){
    case "Sana";
    echo "Its Sana";
    break;
    case "Abdul Majeed";
    echo "Wawo its $name";
    break;
}
echo "<br>";
?>

<!-- Week Day Selection Working days and Weekends -->

<?php
$day = 06;
switch($day){
    case 0;
    echo "its weekends Sunday.";
    echo "<br>";
    break;
    case 1;
    echo "Its wroking Day Monday.";
    break;
    case 2;
    echo "Its wroking Day Tuesday.";
    break;
    case 3;
    echo "Its wroking Day Wensday.";
    break;
    case 4;
    echo "Its wroking Day Thursday.";
    break;
    case 5;
    echo "Its wroking Day Friday.";
    break;
    case 6;
    echo "Its wroking Day Saturday.";
    break;
    default:
    echo "Somethings Wrong.....................!!!";
}
echo "<br>";
?>

<?php
$day = 03;
switch($day){
    case 0;
    echo "its weekends Sunday.";
    echo "<br>";
    break;
    case 1;
    // echo "Its wroking Day Monday.";
    // break;
    case 2;
    // echo "Its wroking Day Tuesday.";
    // break;
    case 3;
    // echo "Its wroking Day Wensday.";
    // break;
    case 4;
    // echo "Its wroking Day Thursday.";
    // break;
    case 5;
    // echo "Its wroking Day Friday.";
    // break;
    echo "Its week working days";
    break;
    case 6;
    echo "Its wroking Day Saturday.";
    break;
    default:
    echo "Somethings Wrong.....................!!!";
}
?>



<?php
echo "<br>";
$check_day = readline("Enter a Number from 1 - 7 : ");
switch($check_day){
    case 1;
    echo "Its Monday\n";
    break;
    case 2;
    echo "Its Tuesday\n";
    break;
    case 3;
    echo "Its Wensday\n";
    break;
    case 4;
    echo "Its Thursday\n";
    break;
    case 5;
    echo "Its Friday\n";
    break;
    case 6;
    echo "Its Saturday\n";
    break;
    case 7;
    echo "Its Sunday\n";
    break;
    default:
    echo "Error Somethings is Missing :";
}

?>