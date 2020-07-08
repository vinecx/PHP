<?php

$conn = new PDO("sqlsrv:Server=localhost;Database=dbphp8;ConnectionPooling=0", "sa", "1423");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1.5.6.7";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";
?>