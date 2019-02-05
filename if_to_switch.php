<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

switch ($mark) {
    case $mark < 10:
        echo "OK :(";
        break;
    case $mark < 100:
        echo "I am good :)";
        break;
    case $mark < 1000:
        echo "YeeeeWhaaaa!!!!";
        break;
    case $mark > 1000:
        echo "\n!!!!WOOOOWWWW!!!\n";
        break;
} 

echo "\n";