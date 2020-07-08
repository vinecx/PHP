<?php 
$nome = "Vinicius";
$cmpvz = "Preencha todos os campos";
$senha = $_POST['senha'];

public function login($login, $password){
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM  tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));
		if (count($results)>0){
			$this->setData($results[0]);
		} else {
			throw new Exception("Login ou senha Inválidos");
		}
if ($_POST['login'] == "vinecx" && $senha == "budegueira")
{
	header("location: index.php");
}
 ?>
 <html lang="pt-br">
  <script type="text/javascript" src="scripts/scripts.js"></script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>
        <link rel="stylesheet" href="styles/autenticação.css">

</head>
<body>
	<header>
		<div id="box" >
			<h1 style="color: red;"> Senha Incorreta, contate um de nossos administradores.</br>
				<?php 
				if ($_POST['login'] == "" || $senha == ""){
	echo $cmpvz;
	} elseif ($senha >= 2) {
		echo "AAAA";
	}
	 ?>
		 <form action="autenticação.php" method="post">
  			<label for="fname">Username</label><br>
 			 <input class="box_name" type="text" id="fname" name="login" value="" autocomplete="on">
 			 <br>
 			 <label for="lname">Senha</label><br>
			<input class="box_ln" type="password" id="lname" name="senha" autocomplete="o" minlength="2" value=""><br>
			<br>
 		 	<input class="button" type="submit" value="Submit">
 		 	<datalist>
 		 		<option>a</option>
 		 		<option>b</option>
 		 	</datalist>
		 </form> 
		 </h1>
		</div>
	</header>
</body>

</html>
