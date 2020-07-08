<?php

class Endereco {
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) {
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		var_dump("destruir");
	}
}

$newendereco = new Endereco("Rua Angelo Balardin", "211", "Ballardim");

var_dump($newendereco);

unset($newendereco);
?>