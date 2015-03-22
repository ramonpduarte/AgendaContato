<?php
include 'Conectar.php';

$nome = $_GET["Nome"];
$telefone = $_GET["telefone"];
$email = $_GET["email"];
$codigo = $_GET["codigo"];

$sql = " UPDATE agenda  SET nome='$nome' , telefone='$telefone' , email ='$email' WHERE id='$codigo' " ;

$Resultado = mysql_query($sql) or die (mysql_error());
if ($Resultado){
      echo " Contato alterado com sucesso . <br>
      <a href='index.html'> Voltar </a>";
}
else{
	echo " Falha ao alterar o contato.
	<a href='index.html'> Voltar </a>"; 
}

?>