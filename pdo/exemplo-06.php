<?php

$conn = new PDO("sqlsrv:Server=localhost;Database=dbphp8;ConnectionPooling=0", "sa", "1423");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();
echo "DADOS OK!";
?>