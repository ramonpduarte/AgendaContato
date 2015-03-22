<?php
	
	include 'Conectar.php';

	$pesquisa = $_POST["pesquisa"];
	$tipo = $_POST["tipo"];

	if($tipo == "nome" )
	{
		$sql= "SELECT * FROM agenda where nome LIKE '%".$pesquisa."%' ";
	
	}
	else if ($tipo == "telefone" )
	{
		$sql= "SELECT * FROM agenda where telefone LIKE '%".$pesquisa."%' ";		
	}else {
		$sql= "SELECT * FROM agenda where email LIKE '%".$pesquisa."%' ";
	}

	
	$result = mysql_query($sql);
	
	
	$qtd = mysql_num_rows($result);
	
	
	if($qtd>0)
	{
	    		
		echo "<br /><br /><h1><center> Resultados contatos </center></h1><table bordercolor=black cellpadding=5 cellspacing=5 border=2 align=center><tr><td>Codigo</td><td>Nome</td><td>Telefone</td><td>E-mail</td></tr>";
		do{
			$linha  = mysql_fetch_row($result);	
			echo "<tr><td>".$linha[0]."</td><td>".$linha[1]."</td><td>".$linha[2]."</td><td>".$linha[3]."</td>
			<td><a href='edita_contatos.php?&codigo=".$linha[0]."'>Editar</a></td>			
			<td><a href='excluir_contatos.php?&codigo=".$linha[0]."'>Excluir</a></td>			
			</tr>"; 
			$qtd = $qtd - 1;	
		}while($qtd>0);
	
		echo"</table>";
		echo"<center> <a href='Index.html'> Voltar </a> </center>";
	}
    else
	{
			echo "Não foram encontrados resultados para essa palavra"; 
	}
	
	
?>