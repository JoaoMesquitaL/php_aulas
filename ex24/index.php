<?php

/*– Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, 
divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.*/

$vp = 50;

echo "o valor com 16% de juros = ".($vp + ($vp*0.16))."<br/>";
echo "o valor das 10 parcelas = ".($vp + ($vp*0.16)) / 10;



?>