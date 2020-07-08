<?php

$fn = function($a){

	echo($a);

};

$fn("Oi");


function test($callback){
	/// Processo Lento

	$callback();
} 

test(function() {
	echo "Terminou!";
});

?>