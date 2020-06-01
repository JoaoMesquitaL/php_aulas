<?php

/*Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%,
exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.*/

$p = 10;

echo "O valor do produto = ".$p."<br/>";
echo "O valor do desconto = 7%<br/>";
echo "O valor com desconto = ".($p - ($p * 0.7));

?>