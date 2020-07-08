<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo //, outras interface
{

	public function acelerar($velocidade){
		echo "O veículo acelerou até". $velocidade . "km/h";

	}

	public function frenar($velocidade){

		echo "o Veiculo freou até ". $velocidade."km/h.";

	}

	public function trocarMarcha($marcha){
		echo "O Veiculo engatou a marcha ". $marcha;
	}
}

$carro = new Civic();
$carro->trocarMarcha(1);

?>