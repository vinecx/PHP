<?php

$conn = new PDO("sqlsrv:Server=localhost;Database=dbphp8;ConnectionPooling=0", "sa", "1423");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($results);

foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

	echo "==================================<br>";
	# 
}

///var_dump($results);

?>