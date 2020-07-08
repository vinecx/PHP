<?php

$condicao = true;

while ($condicao) {
	$numero = rand(1, 100);

		if ($numero === 3) {
			echo "</br>";
			echo "ACHOUUUU";
			echo "</br>";
			$condicao = false;
		}

		echo $numero . " ";
}


?>