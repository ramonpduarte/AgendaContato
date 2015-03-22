<?php
include 'Conectar.php';

//$nome = $_POST["Nome"];
//$serie = $_POST["serie"];
$codigo = $_GET["codigo"];

$sql = "DELETE FROM agenda WHERE id ='$codigo' " ;
$Resultado = mysql_query($sql) or die (mysql_error());
if ($Resultado){
echo " Contato excluido com sucesso . <br>
<a href='Index.html'> Voltar </a>";
}
else{
echo " Falha ao excluir o contato.
<a href='Index.html'> Voltar </a>"; 
}

?>