<?php
include 'Conectar.php';

$nome = $_POST["Nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];

$sql = "INSERT INTO agenda(id, nome, telefone, email) VALUES (null, '".$nome."','".$telefone."','".$email."')";
$Resultado = mysql_query($sql) or die (mysql_error());
if ($Resultado){
echo " Contato cadastrado com sucesso . <br>
<a href='Index.html'> Voltar </a>";
}
else{
echo " Falha ao cadastrar o contato.
<a href='new.html'> Voltar </a>"; 
}

?>