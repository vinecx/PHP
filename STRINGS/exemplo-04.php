<?php

$frase = "A repetição é a mãe da retenção";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

$palavra = "mãe";

var_dump($texto);
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);

echo "<br>"

var_dump ($texto, $texto2);

?>