<?php

$conn = new PDO("sqlsrv:Server=localhost;Database=dbphp8;ConnectionPooling=0", "sa", "1423");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin= :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$id = 2;
$login = "josi";
$password = "1.5.6.5555";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DADOS ALTERADOS OK!";
?>