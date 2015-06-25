<?php

namespace Clientepazzo;

class Prodotto{

    private $id;
    private $descrizione;
    private $prezzo;
    private $quantita;

    public function __construct($id, $descrizione, $prezzo, $quantita){
	$this->setId($id);
	$this->setDescrizione($descrizione);
	$this->setPrezzo($prezzo);
	$this->setQuantita($quantita);
    }

    public function setId($id){
	$this->id = $id;
    }

    public function setDescrizione($descrizione){
        $this->descrizione = $descrizione;
    }

    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    public function setQuantita($quantita){
        $this->quantita = $quantita;
    }

    public function getId(){
	return $this->id;
    }

    public function getDescrizione(){
        return $this->descrizione;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getQuantita(){
        return $this->quantita;
    }
}
