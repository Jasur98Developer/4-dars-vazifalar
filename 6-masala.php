<?php
$N = 600000;
$foiz = 0;
$tulov = 0;
echo "Kiyim uchun harajatlarining summasi: {$N} so`m <br>";
if ($N > 300000 and $N<500000) {
    $foiz = ($N / 100) * 10;
    $tulov = $N - $foiz;
    echo "Chegirma 10%: {$foiz} <br>";
    echo "Jami tulov qilingan summa: {$tulov}";
}

if ($N > 500000) {
    $foiz = ($N / 100) * 20;
    $tulov = $N - $foiz;
    echo "Chegirma 20%: {$foiz} <br>";
    echo "Jami tulov qilingan summa: {$tulov} so'm <br>";
}
