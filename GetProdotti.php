<?php
if (isset($_SESSION['carrello'])) {
	$carrello = unserialize($_SESSION['carrello']);
} else {
	$carrello = new Carrello();
}
return serialize($carrello);
