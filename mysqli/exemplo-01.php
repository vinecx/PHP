<?php

$conn = new mysqli("127.0.0.1", "root", "Vinicius1.", "banco_1");

if ($conn->connect_error) {
	echo "Error ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO usuarios1 (nome, email) VALUES(?, ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "vacagar";

$stmt->execute();

?>