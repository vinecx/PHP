<?php

function soma(int ... $valores)	{
	return array_sum($valores);
}

echo soma(2,2);
echo "<br>";
echo soma(25,2);
echo "<br>";
echo soma(25.5, 6);
echo "<br>";
?>