<?php
// Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah array
// Contoh : array [4,2,6,88,3,11]
// Maka outputnya adalah low : 2, high : 88
// dilarang menggunakan built in function

$array = [4, 2, 6, 88, 3, 11];
$low = $array[0];
$high = $array[0];
$n = count($array);

for ($i = 0; $i < $n; $i++) {
  if ($low < $array[$i]) {
    $low = $array[$i];
  }

  if ($high > $array[$i]) {
    $high = $array[$i];
  }
}

echo "Terendah : " . $low . "<br />";
echo "Terbesar : " . $high;