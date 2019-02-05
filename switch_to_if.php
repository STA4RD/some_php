<?php

echo "Give me the mark!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number == 2) {
    echo "I am better!!";
} elseif (($number == 3) && ($number < 100)) {
    echo "OK :(";
} elseif (($number == 4) && ($number < 100)) {
    echo "I am good :)";
} else echo "YeeeeWhaaaa!!!!";

echo "\n";
