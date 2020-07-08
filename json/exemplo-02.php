<?php 

$json = '[{"nome":"joao","idade":20},{"nome":"jao","idade":21}]';

$data = json_decode($json, true);

var_dump($data);	


?> 