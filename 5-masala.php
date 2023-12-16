<?php
//4 ta son berilgan. Shulardan nechtasi musbat va nechtasi manfiyligini aniqlang.
$son_1 = 2;
$son_2 = 3;
$son_3 = 2;
$son_4 = -1;
$manfiy=0;
$musbat=0;
if($son_1>0){$musbat++;}
if($son_2>0){$musbat++;}
if($son_3>0){$musbat++;}
if($son_4>0){$musbat++;}
else{$manfiy++;}
echo "Musbat sonlar soni: {$musbat} <br>";
echo "Manfiy sonlar soni: {$manfiy}";
?>