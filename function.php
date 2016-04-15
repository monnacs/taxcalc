<?php 

/* Valor da nota + taxa (em %) */
function getTaxValue ($nfValue, $tax) {
	$taxValue = ( $nfValue * (number_format($tax, 2)) / 100 );
	return $taxValue;
}

?>
