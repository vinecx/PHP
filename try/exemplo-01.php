<?php

try {
throw new Exception ("Ops, houve um erro...", 0001);

} catch (Exception $e) {

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));

}

?>