<?php 

/* Valor da nota + taxa (em %) */
function getTaxValue ($nfValue, $tax) {
	return $nfValue + ( $nfValue * (number_format($tax, 2)) / 100 );
}

?>
