<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Vinicius de Almeida");
$cad->setEmail("vinx.alm@gmail.com");
$cad->setSenha("123456");
$cad->registrarVenda();

?>