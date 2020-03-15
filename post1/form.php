<!DOCTYPE html>
<html>
<head>
    <title> Exercicio 1 </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
</head>
<body>

    <h1> Fornulario de Dados </h1>

    <form action="exe.php" method="POST">
    <label><b> Nome: </b></label> </br>
	<input type="text" name="cxnome"></br>
	<label><b> Email: </b></label> </br>
	<input type="text" name="cxemail"></br>
	<label><b> Data: </b></label>  </br>
	<input type="date" name="cxdat"></br>
	<label><b> Cartão: </b></label> </br>
    <select name="cxcard">
        <option value="visa"> Visa </option>
        <option value="master"> Mastercard </option>
        <option value="pagseguro"> PagSeguro </option>
    </select>
    </br> </br>
    <input type="submit" href>
    </form>

</body>
</html>