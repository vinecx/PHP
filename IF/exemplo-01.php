<form method="POST">
	<input type="age" name="idade">
	<input type="submit" name="Ok">
</form>
<?php
isset($_POST);
$qualASuaIdade = $_POST['idade'] ;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;		
if ($qualASuaIdade < $idadeCrianca)
{
    echo "Criança";
} 
else if ($qualASuaIdade < $idadeMaior)
{
	echo "Adolescente";
} 
else if ($qualASuaIdade < $idadeMelhor) 
{
	echo "Você é adulto";
}
else 
{
	echo "idoso";
}
  



echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Você não pode entrar! ":"Você pode entrar! ";

isset($_GET)



?>
