<?php

namespace Clientepazzo;

class ClientepazzoTest extends \PHPUnit_Framework_TestCase
{
    public function testCarrelloVuotoAllaCreazione()
    {
        $carrello = new Carrello();
	$this->assertEquals(count($carrello->getProdotti()), 0);
    }

    public function testCreazioneNuovoProdotto()
    {
	$prodotto = new Prodotto(1, "sciarpa", 12, 1);
        $this->assertEquals(1, $prodotto->getId());
    }

    public function testAggiuntaProdottoAlCarrello()
    {
        $carrello = new Carrello();
	$prodotto = new Prodotto(1, "sciarpa", 12, 1);
	$carrello->aggiungiProdotto($prodotto);

	$prodottiCarrello = $carrello->getProdotti();
        $this->assertEquals(count($prodottiCarrello), 1);

	$quantita = $carrello->getQuantitaTotale();
	$this->assertEquals($quantita, 1);

	$prodottoAggiunto = $prodottiCarrello[0];
	$this->AssertEquals($prodotto->getId(), $prodottoAggiunto->getId());
    }

    public function testAggiuntaProdottiAlCarrello()
    {
        $carrello = new Carrello();
        $prodotto = new Prodotto(1, "sciarpa", 12, 2);
        $carrello->aggiungiProdotto($prodotto);
	$carrello->aggiungiProdotto(new Prodotto(2, "camicia", 30, 2));

        $this->assertEquals(count($carrello->getProdotti()), 2);
	$this->assertEquals($carrello->getQuantitaTotale(), 4);

    }

    public function testCalcoloPrezzoTotale()
    {
        $carrello = new Carrello();
        $prodotto = new Prodotto(1, "sciarpa", 10, 2);
        $carrello->aggiungiProdotto($prodotto);
        $carrello->aggiungiProdotto(new Prodotto(2, "camicia", 30, 2));

        $this->assertEquals($carrello->getPrezzoTotale(), 80);

    }

}
