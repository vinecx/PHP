<?php 
isset($_GET);
$entrada1 = $_GET['a'];
$entrada2 = $_GET['b'];
echo  "<h1>Digite os lados do cubo</h1>"; 
echo "</br>";


$entrada = $entrada1 * $entrada2 *1000;

 ?>
 <form style="text-align: center;" method="GET">
	<label style="color: red;">Informe o valor da base.</label>
	<input type="number" value="0" name="a">
	<label style="color: blue;">Informe o valor da altura do cubo</label>
	<input type="number" value="0" name="b">
	<button type="Submit">Submit</button>
</form>
 <style type="text/css">
 	form {
 		height: 20vh;
 		background-color: black;
 		align-items: center;
 	}
 	h1 {
 		text-align: center;
 	}
 </style>
 <h1 style="color: blue; font-size: 50px; text-align: center;">
 	<?php
 	echo "A volume do seu cubo é " . $entrada;
 	?>
 </h1>