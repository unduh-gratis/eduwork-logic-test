<?php
// Buatlah fungsi sebagai berikut :
// Apabila terdapat int = 4, maka outputnya 24 (prosesnya : 4*3*2*1)
// Apabila terdapat int = 8, maka outputnya 40320 (prosesnya : 8*7*6*5*4*3*2*1)

$int = 4;

for($i = $int - 1; $i >= 1; $i--) {
    $int *= $i;
}

echo $int; // 24