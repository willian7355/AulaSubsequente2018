<style>
div {
	border:1px solid silver; /*border*/
	width:200px; /*largura*/
	height: 180px;/*altura*/
	padding-left: 10px;/*espaço interno da borda*/
}
</style>		
<div>
	<h3>Autenticação</h3>
	<form action = "login.php" method="post">
		<input type="text" name="login" 
placeholder="Informe o usuário"><br />
		<input type="password" name="senha" 
placeholder="Informe a senha"><br /><br />
		<input type="submit" value="LOGAR">
	</form>
</div>