<?php
    
    echo $_SERVER['REQUEST_METHOD'];
	
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    echo" $n1 <br> $n2";
    $soma = 0;
    $sub = 0;
    $mult = 0;
    $div = 0;
    $rest = 0;

    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;
    $rest = $n1 % $n2;

    
    echo"

    <b> Os numero digitados foram: $n1 e $n2 </b><br><br>

    <b> Soma: </b> $soma<br>
    <b> Subtração: </b> $sub<br>
    <b> Divisão: </b> $div<br>
    <b> Multiplicação: </b> $mult<br>
    <b> Resto: </b> $rest<br>
    ";
	
?>