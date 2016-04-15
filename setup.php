<?php 
include_once 'taxcalc.php'; 
include_once 'class.php';

session_start();

$pis = $_SESSION['pis'];
$cofins = $_SESSION['cofins'];
$csll = $_SESSION['csll'];
$irpj = $_SESSION['irpj'];
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Taxcalc</title>
</head>

<body>

<a href="setup.php">Área restrita (atualizar valores)</a>

	<div id="form" >

		<h4>Alíquotas</h4>

		<form action="update.php" method="POST">

			PIS <br />
			Cumulativo: <input type="text" name="pisc" value="<?php echo $pis->getValue(); ?>"><br /><br />
			Não-cumulativo: <input type="text" name="pisnc" value="<?php echo $pis->getValueNonCumulative(); ?>"><br /><br />

			COFINS <br />
			Cumulativo: <input type="text" name="cofinsc" value="<?php echo $cofins->getValue(); ?>"><br /><br />
			Não-cumulativo: <input type="text" name="cofinsnc" value="<?php echo $cofins->getValueNonCumulative(); ?>"><br /><br />

			CSLL: <input type="text" name="csll" value="<?php echo $csll->getValue(); ?>"><br /><br />

			IRPJ: <input type="text" name="irpj" value="<?php echo $irpj->getValue(); ?>"><br /><br />
	
			<br />
 	
				<input type="submit" value="Atualizar valores">
				<a href="index.php"><input type="button" value="Voltar"></a>


		</form>
	</div>

</body>

</html>
