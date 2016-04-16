<?php
include_once 'class.php';

session_start();

$pis = $_SESSION['pis'];
$cofins = $_SESSION['cofins'];
$csll = $_SESSION['csll'];
$irpj = $_SESSION['irpj'];

if(!isset($pis)) {
	$pis = new Pis();
	$_SESSION['pis'] = $pis;
}

if(!isset($cofins)) {
	$cofins = new Cofins();
	$_SESSION['cofins'] = $cofins;
}

if(!isset($csll)) {
	$csll = new Csll();
	$_SESSION['csll'] = $csll;
}

if(!isset($irpj)) {
	$irpj = new Irpj();
	$_SESSION['irpj'] = $irpj;
}

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

	echo "<br /><br /> Valor total da nota fiscal: R$ ".number_format($final, 2, ',', '.');
}

?>
