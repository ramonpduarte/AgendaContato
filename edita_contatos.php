<?php
include 'Conectar.php';

$codigo = $_GET["codigo"];

$sql= "SELECT * FROM agenda where id=".$codigo;


$Resultado = mysql_query($sql) or die (mysql_error());

$linha  = mysql_fetch_row($Resultado);
echo "<form action='altera_contatos.php' method='GET'> 
         Codigo:".$codigo."<br> 
		 <input type='hidden' value=".$codigo." name='codigo'>
		 Nome: <input name='Nome' value=".$linha[1]."><br>
         Telefone: <input name='telefone' value=".$linha[2]."><br>
		 E-mail: <input name='email' value=".$linha[3]."><br>
         <input type='submit' value='Gravar'>
      </form>"
  ?> 