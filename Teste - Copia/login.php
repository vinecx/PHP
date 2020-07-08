<?php

?>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste site 1 </title>
        <link rel="stylesheet" href="styles/ff.css">	
</head>
<body>
	<header>
		<div id="box" >
			<h1> Olá, seja bem-vindo em nosso site, para prosseguirmos, precisamos que nos informe alguns dados sobre você.
		 <form action="autenticação.php" method="post">
  			<label for="fname">Username</label><br>
 			 <input class="box_name" type="text" id="fname" name="login" value="vinecx">
 			 <br>
 			 <label for="lname">Senha</label><br>
			<input class="box_ln" type="password" id="lname" name="senha" value="bagaceira"><br>
			<br>
 		 	<input class="button" type="submit" value="Submit">
		 </form> 
		 </h1>
		</div>
	</header>
</body>

</html>


