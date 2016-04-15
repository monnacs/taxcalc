<?php include 'taxcalc.php'; ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Taxcalc</title>
</head>

<body>

<a href="setup.php">Área restrita (atualizar valores)</a>

	<div id="form" >

		<h4>Nota fiscal</h4>

		<form action="index.php">

			Valor da nota: <input type="text" name="value"><br /><br />

			Modalidade: <br />
				<input type="radio" name="cumulative" value="1" checked>Cumulativo<br>
				<input type="radio" name="cumulative" value="0">Não cumulativo<br>
	
			<br />
 	
				<input type="submit" value="Calcular">

		</form>
	</div>

</body>

</html>
