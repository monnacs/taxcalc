<?php
// include 'class.php';
include 'function.php';

$pis = ($_GET['cumulative'] == 1 ? 0.65 :  1.65) ;
$cofins = ($_GET['cumulative'] == 1 ? 3 : 7.6) ;

if(isset($_GET['value'])) { ?>

<div id="resultado" >

<?php 
echo taxcalc($_GET['value'], $pis, $cofins); 

}
?>

</div>
