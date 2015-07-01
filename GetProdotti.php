<?php
session_start();
include('src/Carrello.php');
include('src/Prodotto.php');
if (isset($_SESSION['carrello'])) {
	$carrello = unserialize($_SESSION['carrello']);
	//$carrello = "sessione letta e carrello caricato";
} else {
	$carrello = new \Clientepazzo\Carrello();
	//$carrello = "sessione non esistente e carrello vuoto";
}
echo $carrello->getJson();
?>
