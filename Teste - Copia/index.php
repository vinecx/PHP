<html>
<script type="text/javascript" src="scrs/script.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum </title>
        	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>


<body>
  <header>
	
		<nav class="container">
			<a href="bagaceira">
			<ul>
			<img class="col-md-2 col-xs-12"src="img/logo.png">
				<li>
					<a  class="col-md-5" href="login.php">Login</a>
				</li>
				<li>
					<a href="#usuarios">Usuário</a>
				</li>
				<li>
					<a href="#bagaceira">Site</a></li>
				</a>
				<li>
					<a href="#perfil">Perfil</a>
				</li>
			</ul>

		</nav>
	</div>	
	<div id="blur"></div>
  </header>

<main>
	<div class="section-grid">
		<div class="sec0">
			<div id="box" >
		 	 <form action="autenticação.php" method= "post">
	  		 	<label for="fname">Username</label><br>
	 			 <input class="box_name" type="text" id="fname" name="login" value="" style="color: #393A3B;">
	 			 <br>
	 			 <label for="lname">Senha</label><br>
				<input class="box_ln" type="password" id="lname" name="senha" value=""><br>
				<br>
	 		 	<input class="button" type="submit" value="Submit">
			 </form>
		    </div>
		</div>
		<div class="sec1">
		<h1>
		Só é bom para a gente, se for bom para o cliente é simples.
        </div>
	    </h1>

	  </div>
	<div class="sections">
	  	<section id="login">
		<p>
		 Sessão 1, texto muito louco.
		</p>
		</section>
		<section id="usuarios">
		<iframe width="1200" height="560" src="https://www.youtube.com/embed/B9FzVhw8_bY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</section>
		<section id="bagaceira" >
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
		</section>
		<section id="perfil">
				<p> CONTATO : 99999999-00
	 			</p>
	 	</section>
	 </div>
	
</main>
</body>
</html>
