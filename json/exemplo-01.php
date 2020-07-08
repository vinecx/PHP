<?php

$pessoas = array();

array_push ($pessoas, array(
		'nome'=>'joao',
		'idade'=>20
)); 

array_push ($pessoas, array(
		'nome'=>'jao',
		'idade'=>21
)); 

print_r($pessoas[1]['nome']);


echo json_encode($pessoas);

?>