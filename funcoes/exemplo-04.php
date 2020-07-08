<?php

function ola() {
	$argumentos = func_get_args("bom dua");

	return $argumentos;

}

var_dump(ola("Bom dia"));
?>