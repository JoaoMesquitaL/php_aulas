<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
</head>
<body>
<!-- Escreva um programa em PHP, que ao escolher o estado, mostre sua capital. Usando o método GET. -->
    


    <form action="capital.php" method="get">
        <label><b> Selecione o estado: </b></label><br>
        <select name="estado">
            <option value="ac"> Acre </option>
            <option value="al"> Alagoas </option>
            <option value="ap"> Amapa </option>
            <option value="am"> Amazonas </option>
            <option value="ba"> Bahia </option>
            <option value="ce"> Ceara </option>
            <option value="df"> Distrito Federal </option>
            <option value="es"> Espirito Santo </option>
            <option value="go"> Goias </option>
            <option value="ma"> Maranhao </option>
            <option value="mt"> Mato Grosso </option>
            <option value="ms"> Mato Grosso do Sul </option>
            <option value="mg"> Minas Gerais </option>
            <option value="pa"> Para </option>
            <option value="pb"> Paraiba </option>
            <option value="pr"> Parana </option>
            <option value="pe"> Pernambuco </option>
            <option value="pi"> Piaui </option>
            <option value="rj"> Rio de Janeiro </option>
            <option value="rn"> Rio Grande do Norte </option>
            <option value="rs"> Rio Grande do Sul </option>
            <option value="ro"> Rondonia </option>
            <option value="rr"> Roraima </option>
            <option value="sc"> Santa Catarina </option>
            <option value="sp"> Sao Paulo </option>
            <option value="se"> Sergipe </option>
            <option value="to"> Tocantins </option>
        </select>
        <p> Na respostas, serão exibidas as siglas dos estados, e nao os nomes dos mesmos. </p>
        <input type="submit">
    </form>


</body>
</html>