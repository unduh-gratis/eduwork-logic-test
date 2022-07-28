<?php
// Buatlah fungsi untuk menampilkan jumlah digit angka tergantung dimana posisi atau tempat dari angka dalam sebuah string “9.86-A5.321”! 
// Contoh: printDigitValue(‘9.86-A5.321’);
// Hasil :
// 9865321
// 9000000
// 800000
// 60000
// 5000
// 300
// 20
// 1

echo printDigitValue('9.86-A5.321');

function printDigitValue($value)
{
  $n = strlen($value);
  $result = "";

  for ($i = 0; $i <= $n; $i++) {
    if (!is_numeric($value[$i])) {
      continue;
    }
    $result .= $value[$i];
  }

  echo $result . "\n";

  $n = strlen($result);

  for ($i = 0; $i <= $n; $i++) {
    echo str_pad($result[$i], $n - $i, '0', STR_PAD_RIGHT) . "\n";
  }
}
