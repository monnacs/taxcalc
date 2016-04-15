<?php 

/* Invoice value + tax (in %) */
function getTaxValue ($invoiceValue, $tax) {
	$taxValue = ( $invoiceValue * (number_format($tax, 2)) / 100 );
	return $taxValue;
}

?>
