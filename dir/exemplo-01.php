<?php

$name = "images";

if (!is_dir($name)){
	mkdir($name);
	echo "diretório $name criado com sucesso!!";
} else {
	rmdir($name);
	echo "já existe o diretorio: $name foi removido";
}

?>