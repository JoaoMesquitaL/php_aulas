<?php

/* 3 – Peça ao usuário para digitar várias idades. Exiba quantas */
pessoas são maior de idade (18 anos) e quantas são
menores.

$id = array(18, 22, 20, 17, 15, 12);
$ma = 0;
$me = 0;
$t = count($id);

echo $t."<br/>";

for($i = 0; $i < $t+1; $i++){
    if($id[$i] >= 18){
        $ma ++;      
    }
    else{
        $me ++;
    }
}
echo "Numero de pessoas maiores= ".$ma;
echo "<br/>Numero de pessoas menores= ".$me;


?>