<?php
// Apabila terdapat sebuah data : 
// array data =  [1,4,7,9,12], 
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput [4,7,9,12]

$array = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$result = [];

foreach ($array as $key => $value) {
  if ($value >= $low && $value <= $high) {
    $result[] = $value;
  }
}

var_dump ($result);
