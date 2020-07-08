<?php

$conn = new PDO("sqlsrv:Server=localhost;Database=dbphp8;ConnectionPooling=0", "sa", "1423");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DADOS APAGADOS OK!";
?>