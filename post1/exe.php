<DOCTYPE! html>
<head>
	<title> Exercicio 1 </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
	<link rel="stylesheet" type="text/css" href="exe1.css">
</head>
<body>
	<!-- Escreva um programa que o usuario informa seu nome, seu email, sua data de nascimento 
	e escolha numa lista suspensa a bandeira do seu cartao de credito. Ao clicar em um butao submit,
	exiba todos os dados na tela, e nao exiba o formulario após o preenchimento. Dentro de uma DIV
	no meio da tela(POST). -->
	<?php
	
	$name = $_POST ["cxnome"];
	$email = $_POST ["cxemail"];
	$dat = $_POST ["cxdat"];
	$card = $_POST ["cxcard"];
	

	echo"
		<div id=show>

		<h1> Informações cedidas </h1>

		<center>
		<b>Nome:</b> $name <br>
		<b>Email:</b> $email <br>
		<b>Data de nascimento:</b> $dat <br>
		<b>Cartão de crédito:</b> $card <br>
		</center>
		</div>
	;"
	
	?>
	
	
	
	

</body>
</html>