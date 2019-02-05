<?php

echo "\n";
$angleA = random_int ( 1 , 45 );
$angleB = random_int ( 46 , 90 );
$angleC = random_int ( 91 , 120 );
$angleD = random_int ( 121 , 180 );
$enemy1  = 1;
$enemy2  = 1;
$shots;
$handle = fopen ("php://stdin","r");
echo "\nTwo enemies incoming! \nAim and shoot him! \nEnemiy down!\n";
while ($enemy1 != 0) {
	$shot = fgets($handle);	
		if (($shot >= $angleA) && ($shot <= $angleB)) {
    	echo "\nEnemiy down!!!!!! \nTake a shot!\n";
    	$enemy1 --;
    	$shots ++;
	} elseif ($shot <= $angleA) {
   		echo "\nСorrective: +" , $angleA - $shot , "degree\nTake a shot!\n";
   		$shots ++;
	} else {
   		echo "\nСorrective: -" , $shot - $angleB , "degree\nTake a shot!\n";
   		$shots ++;
	}	
}
while ($enemy2 != 0) {
	$shot = fgets($handle);	
		if (($shot >= $angleC) && ($shot <= $angleD)) {
    	echo "\nEnemiy down!!!!!! \nTake a shot!\n";
    	$enemy2 --;
    	$shots ++;
	} elseif ($shot <= $angleC) {
   		echo "\nСorrective: +" , $angleC - $shot , "degree\nTake a shot!\n";
   		$shots ++;
	} else {
   		echo "\nСorrective: -" , $shot - $angleD , "degree\nTake a shot!\n";
   		$shots ++;
	}	
}
echo "\nCongratulation!! You take " , $shots , " shots.";