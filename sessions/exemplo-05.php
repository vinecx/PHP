<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_Status());

switch (session_Status()) {
	case PHP_SESSION_DISABLED;
		echo "a sessão esta desabilitada";
		break;
	
	case PHP_SESSION_NONE;
		echo "a sessão esta habilitada, mas não iniciada";
		break;


	case PHP_SESSION_ACTIVE;
		echo "a sessão esta desDDDD";
		break;

	}
?>