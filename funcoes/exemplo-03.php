<?php

function ola($texto = "mundo", $periodo="Bom dia")	{
	return "Olá $texto $periodo <br>";
}


echo ola();
echo ola("caraop", "boa noite");
echo ola("", "");
?>