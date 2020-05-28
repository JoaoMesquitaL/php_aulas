<?php


/* 4 – Peça ao usuário para digitar vários nomes. Exiba na tela */
todos os nomes digitados, porém de maneira invertida (do
último para o primeiro).

$names = array("Joao", "Maria", "Cleber", "Claudia");
$t = count($names);

for ($i = $t; $i >= 0; $i --){
    echo $names[$i]."<br/>";
}



?>