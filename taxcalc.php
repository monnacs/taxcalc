<?php
include 'class.php';
include 'function.php';

/* Generates new object for each tax */
$pis = new Pis();

/* Standard initial values */
if(($_GET['cumulative'] == 1)) {
	$pis->setValue(0.65);
} else {
	$pis->setValue(1.65);
}

if(isset($_GET['value'])) {
	
	$nfValue = $_GET['value'];
	$pisAdd = $pis->calculate($nfValue);
	
	$final = $nfValue + $pisAdd;

	echo number_format($final, 2, ',', '.');
}

?>
