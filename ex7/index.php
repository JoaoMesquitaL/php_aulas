<?php

/* Calcule a média de 10 números digitados pelo usuário. */
for ($i = 0; $i < 10; $i ++){
    echo $v[$i]."<br/>";


$v = array(10,5,22,13,17,25,30, 85, 2, 5);
$m = 0;
$m = array_sum($v);
echo "Soma dos valores = ".$m; 
echo "<br/> Media = ".$m/10;


?>