
<?php
$number = 0;
do{
    $number = (int)readline("Enter a number between 1 and 100: ");

}while($number < 1 && $number < 100);

echo "Thank you! You entered $number\n";
?>