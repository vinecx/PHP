<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo //, outras interface
{

	public function acelerar($velocidade){
		echo "O veículo acelerou até ". $velocidade . "km/h";

	}

	public function frenar($velocidade){

		echo "o Veiculo freou até ". $velocidade."km/h.";

	}

	public function trocarMarcha($marcha){
		echo "O Veiculo engatou a marcha ". $marcha;
	}
}


class Delrey extends Automovel {

		public function empurrar(){

		}

}


$carro = new Delrey();
$carro->acelerar(200);

 ?>