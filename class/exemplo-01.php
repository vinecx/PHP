<?php

class Pessoa {

	public $nome; //// Atributo

	public function falar(){ /// Metodo

		return "O meu nome é ". $this->nome; ///retorno

	}

}

$vinicius = new Pessoa();

$vinicius->nome = "Vinicius de Almeida.";

echo $vinicius->falar();

?>