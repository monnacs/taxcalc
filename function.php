<?php 

function taxcalc ($value, $pis, $cofins) {

	return $value * $pis * $cofins;
}

?>
