<?php
include_once 'class.php';

session_start();

/* Retrieving current values from session */

$pis = $_SESSION['pis'];
$cofins = $_SESSION['cofins'];
$csll = $_SESSION['csll'];
$irpj = $_SESSION['irpj'];

/* Moving 'post' data to variables */

$pisc = $_POST['pisc'];
$pisnc = $_POST['pisnc'];
$cofinsc = $_POST['cofinsc'];
$cofinsnc = $_POST['cofinsnc'];
$csllc = $_POST['csll'];
$irpjc = $_POST['irpj'];

/* Update */
$pis->setValue($pisc);
$pis->setValueNonCumulative($pisnc);
$cofins->setValue($cofinsc);
$cofins->setValueNonCumulative($cofinsnc);
$csll->setValue($csllc);
$irpj->setValue($irpjc);

?>

Atualizado com sucesso. <br /><br />

<a href="index.php"><input type="button" value="Voltar"></a>
