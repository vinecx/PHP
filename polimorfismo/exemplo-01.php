<?php 

abstract class Animal {

	public function falar(){
		return "som";
	}

	public function mover(){
		return "Anda";
	}


}

 class Cachorro extends Animal {
 	public function falar(){
 		return "Late";
 	}
}
 class Gato extends Animal {
 	 public function falar(){
 	 	return "Mia";
 	 }
 }

 class Passaro extends Animal {
 	public function falar() {
 		return "Canta";
 	}
 	public function mover(){
 		return "Voa e " . parent::mover();	
 	}
 }
 

 $pluto = new Cachorro();
 echo $pluto->falar(). "<br>";
 echo $pluto->mover()."<br>";

echo "<br>"."----------------------------------"."<br>";

 $luciano = new Gato();
 echo $luciano->falar(). "<br>";
 echo $luciano->mover()."<br>";
 echo "----------------------------------"."<br>";
$sabia = new Passaro();
 echo $sabia->falar(). "<br>";
 echo $sabia->mover()."<br>";




 ?>