<?php

$pessoa = array(
'nome'=> 'jao', 'idade' =>310);

foreach ($pessoa as &$value) {
 	if (gettype($value) === 'integer') $value += 10;

	echo $value . "<br>";
}


?>