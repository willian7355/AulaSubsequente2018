<?php
include 'conexao.php';
?>
<form action = "" method = "POST">
<label>Nome: </label><input type = "text" name="nome"><br />
<label>Sexo: </label><input type = "radio" name="sexo" value="f">F<input type = "radio" name="sexo" value="m">M<br />
<label>Telefone: </label><input type = "tel" name="telefone"><br />
<label>E-mail: </label><input type = "email" name="email"><br />
<label>Data Nascimento: </label><input type = "date" name="dataNascimento"><br />
<label>Situação: </label><input type = "radio" name="ativo" value="1">SIM<input type = "radio" name="ativo" value="0">NÃO<br />
<input type="submit" value = "CADASTRAR">
</form>

<?php

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

?>
