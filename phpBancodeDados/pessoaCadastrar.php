<?php
	//1 - conectar com o banco de dados
	include 'conexao.php';//inclui o arquivo de conexão
	
	//2 - montar a string de consulta 
  //2.1 - receber os dados
  $nome = filter_input (INPUT_PSOT, "nome");
  
	$sql = "insert into cliente from (nome) values ($nome)";
	 	
	//3 - executar a query (consulta ao banco de dados)
	$inserir = $conectar -> query($sql);	
  
  //4 - verificar se realmente gravou no banco
  $numRegistro = $inserir->affected_rows);
  if ($numRegistro == 1)
		echo "OK";
	}else{
    echo "ERRO"; 
  }
	$myslqi->close();
?>	
