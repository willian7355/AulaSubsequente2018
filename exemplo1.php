<h3>Conteúdo HTML</h3>
<!--comentário em HTML-->
<?php //delimitadores
//comentário de uma linha		
/* 
comentário de bloco (MAIS DO QUE 1 LINHA))
*/
	echo "Conteúdo <br>PHP";
	//o comando echo imprime algo na tela
?>


<?php
	echo "<H3 style='color: red'>TESTE</H3>";	
?>
<?php
	//variáveis em php
	//criando a variável texto com o valor Rafael
	$nome = "Rafael";
	//criando a variável inteiro o valor 36
	$idade = 36;
	$saldo = -50;
	$valor = $idade + $saldo;
	echo "<br>idade + saldo = $valor";
		
	$valor = $idade - $saldo;
	echo "<br>Valor idade - saldo = $valor";
	
	$valor = $idade * $saldo;
	echo "<br>Valor idade * saldo = $valor";
	
	$valor = $idade / $saldo;
	echo "<br>Valor idade / saldo = $valor";	
	
	echo "<hr>Nome = $nome";
	echo "<br>Idade = $idade";
	echo "<br>Saldo = $saldo";
	echo "<hr>Valor = $valor";
	
	echo "<hr>"; 
	$megasena = 7898125.89;

   echo 'R$' . number_format($megasena, 2, ',', '.');
?>






