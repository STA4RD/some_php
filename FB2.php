<?php
$file = fopen('2518.txt', 'r+');
$buffer = fgets($file);
fclose($file);
echo "\n" . 'Numbers in file is: ' .  $buffer . "\n\n";
$resultArrayItem = explode(" ", $buffer); // разбил строку на массив
#var_dump ($resultArrayItem);
function is_multiple($array) {
    $num = 0;
    $endRes = '';
while ($num != $array[2]) {
    $num++;
    if (($num % $array[1] == 0) && ($num % $array[0] == 0)) {
       $endRes .= "FB ";
    } elseif ($num % $array[1] == 0) {
        $endRes .=  "B ";
    } elseif ($num % $array[0] == 0) {
        $endRes .=   "F ";
    }  else {
        $endRes .=   $num . " " ;
    }
}
return trim($endRes);
}

$textRes = (is_multiple($resultArrayItem));

$resFile = fopen("FBresult.txt", "w+");
$write = fwrite($resFile, $textRes); // Запись в файл
#var_dump($write);
if ($write) echo 'This data was saved to the file: ';
else echo 'Error write.';
fclose($resFile); //Закрытие файла

/*$resFile = fopen("FBresult.txt", "r");
if ($resFile) echo fpassthru($resFile);
else echo "Error reed.";
*/
echo readfile("FBresult.txt");