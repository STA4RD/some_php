<?php

echo "What time is it??\n";
$handle = fopen ("php://stdin","r");
$input = fgets($handle);

echo ($input == 1) ? "PHP TIME!" : "Winter is coming!"; 

echo "\n";