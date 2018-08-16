<!--github.com/rafaelflorindo/AulaSubsequente2018-->	

<form action = "exemplo3.php" method = "post">
	<label for="nome">Informe o nome: </label>
	<input type="text" name="nome" id="nome"/><br /><br />
	
	<label for="email">Informe o e-mail: </label>
	<input type = "email" name="email" id="email"/><br /><br />
	
	<label for="telefone">Telefone:</label>
	<input type = "tel" name="telefone" id="telefone"/><br /><br />
	
	<label for="genero">Genero:</label>
	<input type = "radio" name="genero" value ="F"/>F
	<input type = "radio" name="genero" value ="M"/>M
	<input type = "radio" name="genero" value ="X"/>X<br /><br />

	<label for="cidade">Informe a cidade: </label>
	<input type = "text" name="cidade" id="cidade"/><br /><br />

	<label for="estado">Selecione o estado: </label>
	<select name="estado" id="estado">
		<option value="SP">SP</option>
		<option value="PR">PR</option>
		<option value="SC">SC</option>
	</select>	
	<br /><br />	
	
	<label for="informacao">Deseja receber informações: </label>
	<input type = "checkbox" name="receberInformacao" 
	value = "1" id="informacao"/><br /><br />	
	
	<input type="reset" value="LIMPAR" />
	<input type="submit" value="ENVIAR" />		
</form>