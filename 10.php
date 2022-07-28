<?php
// Buatlah fungsi untuk mengecek tahun kabisat
// input : 2021
// output : 2021 bukan tahun kabisat

// input : 2024
// output : 2024 adalah tahun kabisat

$input = 2021;

if ($input % 4 == 0) {
  echo "$input adalah tahun kabisat";
} else if ($input % 4 != 0) {
  echo "$input bukan tahun kabisat";
}