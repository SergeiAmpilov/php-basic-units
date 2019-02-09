<?php
function BubleSort($array)
{

  do {
    $switch = false;
    for ($i = 0; $i < count($array) - 1; $i++) {
      if ($array[$i] > $array[$i+1]) {
        $tmp = $array[$i];
        $array[$i] = $array[$i+1];
        $array[$i+1] = $tmp;
        $switch = true;
      }
    }
  } while ($switch);

  return $array;
}


$myArray = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
print_r("Starting array: \n");
print_r($myArray);
$myArray = BubleSort($myArray);
print_r("Finish array: \n");
print_r($myArray);
