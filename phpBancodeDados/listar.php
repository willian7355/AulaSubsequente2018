<?php
	//1 - conectar com o banco de dados
	include 'conexao.php';//inclui o arquivo de conexão
	
	//2 - montar a string de consulta 
	$sql = "select * from cliente";
	 	
	//3 - executar a query (consulta ao banco de dados)
	$listar = $conectar -> query($sql);	
	
	/*4 - associar o conteudo da execução da query em um array, utilizando o laço de repetição que	percorrerá a todos os registros que ele encontrar
	na tabela colocando cada linha em uma posição do array dinâmico.*/
	
	while($relatorio = $listar->fetch_assoc()){
		$dado[] = $relatorio;
	}
	//var_dump($dado);
	/*O laço de repetição foreach é o mais recomendado para trabalhar com arrays já preenchidos, uma vez que ele gera uma cópia do array original
	e já possui um contador interno, deixando o programador dispensado de se preocupar com o contador, afim de evitar o lopping infinito
	*/
	foreach($dado as $linha){
		echo "Código: $linha[codigoCliente]";
		echo "<br />Nome: $linha[nome]";
		echo "<br />Sexo: " . $linha["sexo"];				
		echo "<br />Telefone: " . $linha["telefone"];
		echo "<br />E-mail: " . $linha["email"];
		echo "<br />Data Nascimento: " . $linha["dataNascimento"];
		echo "<br />Situação: " . $linha["ativo"];
		echo "<hr />";	
	}
	$myslqi->close();/*fecha a conexão com o banco de dados, contudo, se a sua aplicação necessitar ainda esta conectada, uma vez rodado este scritp
será fechado automaticamente o banco e causará erro na aplicação.*/
?>	
