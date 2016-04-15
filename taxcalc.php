<?php
include 'class.php';
include 'function.php';

$pis = new Pis();

if(($_GET['cumulative'] == 1)) {
	$pis->setValue(0.65);
} else {
	$pis->setValue(1.65);
}

if(isset($_GET['value'])) {
	
	$valor = $_GET['value'];
	$calculado = $pis->calculate($valor);
	echo number_format($calculado, 2, ',', '.');
}

?>
