<?php
/*recebendo as duas variáveis 
do formulário*/

	$valor1 = $_POST["valor1"];
	$valor2 = $_POST["valor2"];
	//imprimindo os valores das variáveis
	echo "Valor 1: $valor1";
	echo "<br />Valor 2: $valor2";
	
	$soma = $valor1 + $valor2;
	echo "<br />Soma de 
			<font color = red>Valor 1</font> com 
			<span style = color: red;>Valor 2</span> 
			= $soma";
?>