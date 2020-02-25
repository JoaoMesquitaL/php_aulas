<!DOCTYPE html>
<head>
    <title> Exercicio 2</title>
<head>
<body>
<!-- Efetue um algoritmo PHP que receba os valores A, B, C e D. Efetue entre A e C, 
a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da 
multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D". -->
    <?php

    echo "<h1> Exercicio 2) </h1>";

    $A = 7;
    $B = 2;
    $C = 3;
    $D = 5;
    $soma= 0;
    $mult= 0;


    $soma = $A + $C;
    $mult = $B * $D;

    if($soma > $mult){
        echo "$A + $C é maior que $B x $D";
    }
    else{
        if($soma < $mult){
            echo "$A + $C é menor que $B x $D";
        }
        else{
            echo "$A + $C é igual a $B x $D";
        }
    }

    ?>

</body>
</html>