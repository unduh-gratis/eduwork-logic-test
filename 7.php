<?php
// Dari soal nomor 6, buatlah juga untuk menghasilkan output total ada berapa angka yg termasuk dari bagian low dan high
// array data = [1,4,7,9,12],
// int low = 2,
// int high = 15,
// maka akan menghasilkan ouput = 4

$array = [1, 4, 7, 9, 12];
$low = 2;
$high = 15;

$result = [];

foreach ($array as $key => $value) {
  if ($value >= $low && $value <= $high) {
    $result[] = $value;
  }
}

echo count($result);