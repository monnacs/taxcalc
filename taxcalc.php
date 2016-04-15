<?php
include 'class.php';
include 'function.php';

/* Generates new object for each tax */
$pis = new Pis();
$cofins = new Cofins();
$csll = new Csll();
$irpj = new Irpj();

/* Standard initial values */
if(($_GET['cumulative'] == 1)) {
	$pis->setValue(0.65);
	$cofins->setValue(3);
} else {
	$pis->setValue(1.65);
	$cofins->setValue(7.6);
}

$csll->setValue(1.08);
$irpj->setValue(1.5);

if(isset($_GET['value'])) {
	
	/* calculates each tax */
	$invoiceValue = $_GET['value'];
	$pisAdd = $pis->calculate($invoiceValue);
	$cofinsAdd = $cofins->calculate($invoiceValue);
	$csllAdd = $csll->calculate($invoiceValue);	
	$irpjAdd = $irpj->calculate($invoiceValue);	

	/* debug stuff */
	echo "Valor da nota fiscal = ".$invoiceValue."<br />";
	echo "Adicional PIS = ".$pisAdd."<br />";
	echo "Adicional COFINS = ".$cofinsAdd."<br />";
	echo "Adicional CSLL = ".$csllAdd."<br />";
	echo "Adicional IRPJ = ".$irpjAdd."<br />";

	$final = $invoiceValue + $pisAdd + $cofinsAdd + $csllAdd + $irpjAdd;

	echo number_format($final, 2, ',', '.');
}

?>
