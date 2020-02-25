<!DOCTYPE html>
<head>
    <title> Exercicio 3 </title>
<head>
<body>
<!-- Efetue um algoritmo php que calcule e imprima o salário reajustado de um funcionario de acordo
com a seguinte regra: salários até 300, reajuste de 50% ; salarios maiores que 300, reajuste de 30%-->
    <?php

         echo "<h1> Exercicio 3) </h1>";

        $sal = 350;
        $salf = 0;

        if($sal<= 300)
        {
        $salf = $sal + $sal/2;
        echo "salario antigo $sal<br>";
        echo "salario novo $salf";
        }
        else{
        $salf = $sal + $sal*0.30;
        echo "salario antigo $sal<br>";
        echo "salario novo $salf";
        }
    
    ?>

</body>
</html>