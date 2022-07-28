<?php
// Ketik kode untuk swap 2 integer variables tanpa VARIABLE TAMBAHAN
//Contoh : let a = 3, let b = 7 => hasilnya a = 7, b = 3

$a = 3;
$b = 7;
// swap $a to $b and $b to $a
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a : " . $a . "\n";
echo "b : " . $b . "\n";