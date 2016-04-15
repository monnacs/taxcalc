<?php
include 'class.php';
include 'function.php';

/* Generates new object for each tax */
$pis = new Pis();
$cofins = new Cofins();
$csll = new Csll();

/* Standard initial values */
if(($_GET['cumulative'] == 1)) {
	$pis->setValue(0.65);
	$cofins->setValue(3);
} else {
	$pis->setValue(1.65);
	$cofins->setValue(7.6);
}

$csll->setValue(9);

if(isset($_GET['value'])) {
	
	$invoiceValue = $_GET['value'];
	$pisAdd = $pis->calculate($invoiceValue);
	$cofinsAdd = $cofins->calculate($invoiceValue);
	$csllAdd = $csll->calculate($invoiceValue);	

	echo "Valor da nota fiscal = ".$invoiceValue."<br />";
	echo "Adicional PIS = ".$pisAdd."<br />";
	echo "Adicional COFINS = ".$cofinsAdd."<br />";
	echo "Adicional CSLL = ".$csllAdd."<br />";

	$final = $invoiceValue + $pisAdd + $cofinsAdd + $csllAdd;

	echo number_format($final, 2, ',', '.');
}

?>
