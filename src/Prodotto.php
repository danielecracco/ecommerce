<?php

namespace Clientepazzo;

class Prodotto{

    private $id;
    private $nome;
    private $prezzo;
    private $quantita;
    private $link;

    public function __construct($id, $nome, $prezzo, $quantita, $link){
	$this->setId($id);
	$this->setNome($nome);
	$this->setPrezzo($prezzo);
	$this->setQuantita($quantita);
	$this->setLink($link);
    }

    public function setId($id){
		$this->id = $id;
    }

	public function setLink($link){
		$this->link=$link;
	}
    public function setNome($nome){
        $this->nome = $nome;
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

    public function getNome(){
        return $this->nome;
    }

    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getQuantita(){
        return $this->quantita;
    }
    public function getLink(){
		return $this->link;
	}
	public function getJson(){
	    return "{\"nome\":\"".$this->nome."\", \"prezzo\":\"".$this->prezzo."\", \"link\":\"".$this->link."\"}";
	}
}
