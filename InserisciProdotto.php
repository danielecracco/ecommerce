<?php
session_start();
$nome=$_POST['nome'];
$prezzo=$_POST['prezzo'];
$link=$_POST['link'];
include('src\Carrello.php');
include('src\Prodotto.php');

$prodotto = new Prodotto(0,$nome,$prezzo,1,$link);

/*
$prodottoService = new ProdottoService();
$porodotto =$prodottoService->getProdottById($idrodoto);
-----
$sql = "SELECT.....";
$prodotto= new Prodotto(1, 2, 3, );
*/

if (isset($_SESSION['carrello'])) {
	$carrello = unserialize($_SESSION['carrello']);
} else {
	$carrello = new Carrello();
}

$carrello->aggiungiProdotto($prodotto);

$_SESSION['carrello'] = serialize($carrello);
