<?php

echo "Enter three numbers in turn\n";
$handle = fopen("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$end = fgets($handle);
$num;
while ($num != $end) {
    $num++;
    if (($num % $buzz == 0) && ($num % $fizz == 0)) {
       echo "FB ";
    } elseif ($num % $buzz == 0) {
        echo "B ";
    } elseif ($num % $fizz == 0) {
        echo  "F ";
    }  else {
        echo  $num , " " ;
    }
}