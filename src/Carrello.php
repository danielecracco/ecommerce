<?php

namespace Clientepazzo;

class Carrello{

    private $prodotti;
    private $prezzoSpedizione;

    public function _construct(){
	$this->prodotti=array();
    }

    function aggiungiProdotto($prodotto){
	$this->prodotti[]=$prodotto;
    }

    function getProdotti(){
	if(isset($this->prodotti)){
	    return $this->prodotti;
	}else{
	    return array();
	}
    }

    function getQuantitaTotale(){
	$quantitaTotale = 0;
	for($i=0; $i < count($this->prodotti); $i++){
	    $quantitaTotale += $this->prodotti[$i]->getQuantita();
	}
	return $quantitaTotale;
    }

    function setPrezzoSpedizione($destinazione, $express){

	if ($destinazione == "Italia")
		if express

    }

   function getPrezzoTotale(){
	$prezzoTotale = 0;
        for($i=0; $i < count($this->prodotti); $i++){
            $prezzoTotale += $this->prodotti[$i]->getPrezzo() * $this->prodotti[$i]->getQuantita();
        }
        return $prezzoTotale;

   }

}
