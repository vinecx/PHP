<?php 
// Conecta-se com o MySQL 
function __construct(){
		$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

	}
 
// Seleciona banco de dados 
 
?>