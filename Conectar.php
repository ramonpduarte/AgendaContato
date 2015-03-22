<?php
  $servidor="localhost";
  $usuario="root";
  $senha="";
  $basedados="agenda";
  
  
  if ( @mysql_connect($servidor,$usuario,$senha)){
       mysql_select_db($basedados);
  }
  else{
  echo "falha ao conectar";
  }
  ?>